<?php

$servermame = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Creat Connection

        $conn = mysqli_connect($servermame, $username, $password, $dbname);

        // Check connection
        
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }

?>