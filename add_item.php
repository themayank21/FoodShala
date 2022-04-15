<?php
    include "includes/common.php";
    if(isset($_GET['addButton'])){
        $name = $_GET['foodName'];
        $price = $_GET['foodPrice'];
        $restid = $_SESSION['rest_id'];
        $sql = mysqli_query($con, "INSERT INTO food_table(food_name, price, restaurant_id) VALUES ('$name', '$price', '$restid')");
        header('Location: product_add.php');
    }
