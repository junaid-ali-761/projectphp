<?php

$con =   mysqli_connect ("localhost","root","","mico");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


?>