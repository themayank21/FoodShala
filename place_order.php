<?php
    include "includes/common.php";

    $item_id = $_GET['id'];
    $user = $_SESSION['id'];
    $result = mysqli_query($con, "UPDATE order_history SET status='Confirmed' WHERE order_id = '$item_id'");
    echo "<script>alert('Order Placed!!')</script>";
    header("location: cart.php");
