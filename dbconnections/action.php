<?php
include_once 'conection.php';

if(isset($_POST['signup'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql ="insert into register(name,email,password) values('$name','$email','$password')";
    mysqli_query($con, $sql);
    header("Location: login.php");
    
}


