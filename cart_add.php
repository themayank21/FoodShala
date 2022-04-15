<?php
    include 'includes/common.php';
    $item_id = $_GET['id'];
    $user = $_SESSION['id'];

    $result = mysqli_query($con, "INSERT INTO order_history(user_id, food_id, status, count) VALUES ('$user', '$item_id', 'Added to cart', '1')");

    header('Location: product.php');