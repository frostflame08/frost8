<?php
session_start();
include('config.php');

 if(isset($_SESSION['fullname'])) {
  
    $user_check = $_SESSION['fullname'];

    $ses_sql = mysqli_query($conn,"SELECT * from dbl_user where fullname = '$user_check'");

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);


    if(!isset($_SESSION['fullname'])){
        header("location: report.php");
    }

 } else {
    header("location: ");
 }
?>