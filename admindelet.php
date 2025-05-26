<?php

include_once"connction.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE  id = $id";

    if ($con->query($sql) === TRUE){
        header('location: usersdata.php');
        exit;
    }
    else{
        echo "Error deleting recod: " .$Scon->error;
    }

}
   else{
      echo "Invalid request.";
    }






?>