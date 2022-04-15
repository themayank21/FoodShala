<?php

include "common.php";
if($_POST['userSignSubmit']){
    $name = mysqli_real_escape_string($con, $_POST['restaurantSignName']);
    $user = mysqli_real_escape_string($con, $_POST['restaurantSignEmail']);
    $licence = mysqli_real_escape_string($con, $_POST['restaurantSignId']);
    $pass = mysqli_real_escape_string($con, $_POST['restaurantSignPassword']);

    $query = mysqli_query($con, "SELECT * FROM restaurant_table where restaurant_email = '$user' and restaurant_password = '$pass'");
    $num_rows = mysqli_num_rows($query);

    if($num_rows>0) {
        echo '<script> alert("User Found!! Please Login")</script>';
        header('Location: ../restaurant_login.php');
    }
    else {
        $ins = mysqli_query($con, "INSERT INTO restaurant_table (restaurant_name, restaurant_email, restaurant_licence, restaurant_password) VALUES ('$name','$user','$licence','$pass')")
        or die(mysqli_error($con));
        $_SESSION['rest_name'] = $name;
        $_SESSION['rest_email'] = $user;
        $_SESSION['rest_id'] = mysqli_insert_id($con);

        session_start();

        header('Location: ../product_add.php');
    }
}

