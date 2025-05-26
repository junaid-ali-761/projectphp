<?php
session_start();
include_once "connction.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    
    $sql = "INSERT INTO users (username,email,password,role)
    values ('$username','$email','$password','$role')";

    $sql = $con->prepare("SELECT id, password, role FROM users WHERE email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $sql->store_result();

    if ($sql->num_rows > 0) {
        $sql->bind_result($id, $hashed_password, $role);
        $sql->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['userid'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;

            if ($role == 'admin') {
                header("Location: index1.php");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            echo "Invalid credentials.";
        }
    } else {
        echo "User not found.";
    }
}
?>
