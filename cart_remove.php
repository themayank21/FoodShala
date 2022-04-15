<?php
    include "includes/common.php";

    $item_id = $_GET['id'];
    $user = $_SESSION['id'];
    $result = mysqli_query($con, "DELETE FROM order_history WHERE order_id = '$item_id'");
    echo "<script>alert('Item Removed!!')</script>";
    header("location: cart.php");
