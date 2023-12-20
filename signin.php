<?php
include('config.php');
session_start();


if(isset($_POST['submit'])){

    $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $contact = mysqli_real_escape_string($conn,$_POST['contact']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);

    $sql_insert = "INSERT into dbl_user SET
    fullname = '$fullname',
    password = '$password',
    address = '$address',
    contact = '$contact'";

    if($result_insert = mysqli_query($conn, $sql_insert)){
        ?>
        
        <script>
            alert('Successfully Create a New User');
            window.location.href='index.php';
        </script>

        <?php
    } else{

        if(!$result_insert) {die('Unsucessful added'. mysqli_error()); }
    }

    mysqli_close($conn);

    }
    ?>