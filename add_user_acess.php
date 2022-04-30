<?php
session_start();
require_once('clasess.php');
$user =  unserialize($_SESSION["user"]);

var_dump($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$role = $_POST["role"];
$new_user = new User($name,$email);
$new_user->role = $role;
$rslt =$user->create_user($new_user);
var_dump($rslt);
if ($rslt ==true){
    header("location:add_user.php");
}else{
    header("location:add_user.php?error=db_error");
}                                                       
