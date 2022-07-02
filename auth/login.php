<?php
session_start();

require '../vendor/autoload.php';
$dotenv= \Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

$username= getenv("USERNAME");
$password=getenv("PASSWORD");

if(isset($_POST["username"],$_POST["password"])){
    
     if($_POST["username"] == $username && $_POST["password"] == $password){
         echo 'igual';
         $_SESSION["username"] = $_POST["username"];
         header("Location:../admin.php");
     }else{
         header("Location:../form-login.php");
     }   
    
}
