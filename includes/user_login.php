<?php
    if(isset($_POST['userSubmit'])) {
        $user = $_POST['userEmail'];
        $pass = $_POST['userPassword'];
    }

    include "common.php";

    $query = mysqli_query($con, "SELECT * FROM user_table where user_email = '$user' and user_password = '$pass'");
    $query_array = mysqli_fetch_array($query);
    $num_rows = mysqli_num_rows($query);

    if($num_rows == 1){
        $_SESSION['id'] = $query_array['user_id'];
        $_SESSION['user'] = $query_array[1];
        $_SESSION['email'] = $user;
        header("location: ../product.php");
    }
    else {
        echo "<script>alert('Wrong credentials')</script>";
        header("location: ../login.php");
    }
