<?php

include_once "connction.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
     $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role']; // 'user' or 'admin'

  

 
    $sql = "INSERT INTO users (username,email,password,role)
    values ('$username','$email','$password','$role')";

   
    if($con->query($sql) === TRUE){
       
       header('location: index.php');
       exit;
     }
    else{
       echo "Error:".$sql. "<br>". $con->error;
    }


}


?>
