<?php
    if(isset($_POST['restaurantSubmit'])) {
        $user = $_POST['restaurantEmail'];
        $pass = $_POST['restaurantPassword'];
    }

    include "common.php";

    $query = mysqli_query($con, "SELECT * FROM restaurant_table where restaurant_email = '$user' and restaurant_password = '$pass'");
    $query_array = mysqli_fetch_array($query);
    $num_rows = mysqli_num_rows($query);

    if($num_rows == 1){
        $_SESSION['rest_id'] = $query_array['restaurant_id'];
        $_SESSION['rest_user'] = $query_array[1];
        $_SESSION['rest_email'] = $user;
        header("location: ../product_add.php");
    }
    else {
        echo "<script>alert('Wrong credentials')</script>";
        header("location: ../restaurant_login.php");
    }
