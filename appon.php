<?php

include_once("connction.php");




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pationname = $_POST['pname'];
     $doctorname = $_POST['doctorname'];
     $departmentname = $_POST['department'];
     $phonenumber = $_POST['pnumber'];
     $symptoms = $_POST['symptoms'];
     $timedate = $_POST['date'];
    
  

 
    $sql = "INSERT INTO appointments (Patient_Name,Doctors_Name,Department_Name,Phone_Number,Symptoms,Time_Date)
    values ('$pationname','$doctorname','$departmentname','$phonenumber','$symptoms','$timedate')";

   
    if($con->query($sql) === TRUE){
       
         echo " Yours appointment recive ";
    }
     //  header('location: appointment.php');
     //  exit;
    
  //  else{
   //    echo "Error:".$sql. "<br>". $con->error;
  //  }


}


?>