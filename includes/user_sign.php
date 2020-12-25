<?php

    include "common.php";
    if($_POST['userSignSubmit']){
        $name = mysqli_real_escape_string($con, $_POST['userSignName']);
        $user = mysqli_real_escape_string($con, $_POST['userSignEmail']);
        $pass = mysqli_real_escape_string($con, $_POST['userSignPassword']);

        $query = mysqli_query($con, "SELECT * FROM user_table where user_email = '$user' and user_password = '$pass'");
        $num_rows = mysqli_num_rows($query);

        if($num_rows>0) {
            echo '<script> alert("User Found!! Please Login")</script>';
            header('Location: ../login.php');
        }
        else {
            $ins = mysqli_query($con, "INSERT INTO user_table (user_name, user_email, user_password) VALUES ('$name','$user','$pass')")
            or die(mysqli_error($con));
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $user;
            $_SESSION['id'] = mysqli_insert_id($con);

            session_start();

            header('Location: ../product.php');
        }
    }

