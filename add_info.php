<?php

    include "includes/common.php";
    if(isset($_GET['addDetailButton'])){
        $type = $_GET['restaurantType'];
        $rating = $_GET['restaurantRating'];
        $id = $_SESSION['rest_id'];
        $isveg = 0;
        if($_GET['vegetarian'] == "on") {
            $isveg = 1;
        }
        $sql = mysqli_query($con, "UPDATE restaurant_table SET restaurant_rating = '$rating', type = '$type', is_veg='$isveg' where restaurant_id ='$id'");
        header("location: product_add.php");
    }