<?php
include('config2.php');
session_start();


if(isset($_POST['submit'])){

    $locations = mysqli_real_escape_string($conn,$_POST['locations']);
    $emergency = mysqli_real_escape_string($conn,$_POST['emergency']);
    $details = mysqli_real_escape_string($conn,$_POST['details']);

    $sql_insert = "INSERT into tbl_user SET
    locations = '$locations',
    emergency = '$emergency',
    details = '$details'";

    if($result_insert = mysqli_query($conn, $sql_insert)){
        ?>
        
        <script>
            alert('Successfully sent your help');
            window.location.href='index.php';
        </script>

        <?php
    } else{

        if(!$result_insert) {die('Unsucessful added'. mysqli_error()); }
    }

    mysqli_close($conn);

    }
    ?>