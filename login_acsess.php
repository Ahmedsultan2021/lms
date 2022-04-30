<?php
session_start();
if (!empty($_POST["email"]) && !empty($_POST["password"]))
{


$email = htmlspecialchars( trim($_POST["email"]));
$password = $_POST["password"];

require_once('clasess.php');
$user =User::login($email ,md5($password));
var_dump($user);

// var_dump($user);
if (!empty($user))
{
    $role = $user->role;
    //var_dump($role);
    if ($role == "it") {
        # code...
        $_SESSION["user"] =serialize( $user);    
        header("location:it.php");
    }
    if ($role == "student") 
    {
        $_SESSION["user"] = serialize($user);    
          header("location:student.php");
    }
    if ($role == "professor")
     {
        # code...
        $_SESSION["user"] =serialize( $user);    
        header("location:proff.php");
    }
}else
{
    header("location:login.html?error=invalid_login");
}

}
else
{
    header("location:login.html?error=empty");
}




