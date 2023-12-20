<?php
session_start();

include('config.php');


if(isset($_POST['signin'])){

    $myusername = $_POST['fullname'];
    $mypassword = $_POST['password'];

    $sql = "SELECT * FROM dbl_user WHERE fullname = '$myusername' and password = '$mypassword' ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);


    if($count > 0 ){

        $_SESSION['fullname'] = $myusername;
        ?>

        <script>
            alert("Login Successfully");
            window.location.href='choose.php';
        </script>

        <?php


        

    }
}


mysqli_close($conn);
?>