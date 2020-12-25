<?php
    $con = mysqli_connect("localhost:3306", "root", "", "foodshala_database") or die($con);

    if(!isset($_SESSION['email'])){
        session_start();
    }
