<?php


include_once "connction.php";






require '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $confirm_password = $_POST['confirm_password'];

    
     $sql = "INSERT INTO usersdata   (username , email, password,  confirm_password,) 
      VALUES (' $username',' $email','$password',' $confirm_password ')";
    $sql->execute([$username, $email, $password, $confirm_password]);

    echo "Registration successful!";
}


?>