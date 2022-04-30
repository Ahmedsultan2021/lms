<?php

class user{

    protected $id;
    public $name;
    public $email;
    public $role;
    protected $password;
    public $department;

    function __construct($name ,$email)
    {
        $this->name = $name;
        $this->email =$email;
    }

    static function login($email ,$password)
    {
        $user =null;

        $qry = "select * from user where email='$email' and password='$password'" ;

        require_once("config.php");

        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn  ,$qry) ;
        //var_dump( $rslt );
        if ($arr = mysqli_fetch_assoc($rslt)){
            switch($arr["role"]){
                case "student":
                    $user  = new Student($arr["name"] , $arr["email"]);
                    $user->id = $arr["id"];
                  
                    break;
                case "it":
                    $user  = new IT($arr["name"] , $arr["email"]);
                    $user->id = $arr["id"];                 
                    break;

                case "professor":
                    $user  = new proff($arr["name"] , $arr["email"]);
                    $user->id = $arr["id"];
                    break;
            }    
        }
        mysqli_close($cn);
        return $user;
    }
}
class proff extends user{

    function __construct($name ,$email)
    {        
        parent::__construct($name ,$email);
        $this->role ="professor";            
    }
}
class student extends user{

    function __construct($name ,$email)
    {        
        parent::__construct($name ,$email);
        $this->role ="student";            
    }
    function show_all_courses()
    {
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn  ,"select * from course");
        $data =mysqli_fetch_all($rslt ,MYSQLI_ASSOC);
        mysqli_close($cn);
        return $data;

    }
}
class IT extends user
{
    function __construct($name ,$email)
    {        
        parent::__construct($name ,$email) ;
        $this->role ="it";            
    }
    function show_all_users()
    {
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn  ,"select * from user");
        $data =mysqli_fetch_all($rslt ,MYSQLI_ASSOC);
        mysqli_close($cn);
        return $data;
    }
    
    public function create_user(User $user)
    {
        $name  =$user->name;
        $email  =$user->email;
        $role  =$user->role;
        $pw = md5("123456");
        $did  = "computer";
        $qry ="insert into user (name,email,password,role,dapartment) 
        values ('$name','$email' ,'$pw', '$role' , '$did')";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn  ,$qry) ;
         //echo mysqli_error($cn);
         //var_dump($rslt);
         mysqli_close($cn);
        return $rslt;
    }        
}
