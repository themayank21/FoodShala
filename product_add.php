<?php
    include "includes/common.php";
    if (!isset($_SESSION['rest_email'])) {
        header('location: restaurant_login.php');
    }
    if(isset($_SESSION['email'])) {
        header("location: product.php");
    }
    $query = mysqli_query($con, "SELECT * FROM restaurant_table");
    $name = mysqli_fetch_array($query);
    $rows = mysqli_num_rows($query);
    $restaurant_id = $_SESSION['rest_id'];
    $menu_query = mysqli_query($con, "SELECT * FROM food_table where restaurant_id = '$restaurant_id'");
    $menu_list = mysqli_num_rows($menu_query);
    $sql = mysqli_query($con,"select sum(count) as total from order_history INNER JOIN food_table on order_history.food_id = food_table.food_id where food_table.restaurant_id = '$restaurant_id'");
    $value = mysqli_fetch_array($sql)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap css cdn-->
    <link href="css/Bootstrap/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/product.css">
    <title>FoodShala</title>

</head>
<body>


    <!--Header File-->
    <header>
        <?php
            include "./includes/header.php";
        ?>
    </header>


    <main>
        <!--menu part-->
        <div class="container">
            <h2 class="py-3 text-info text-center"><?php echo $name['restaurant_name'] ?></h2>
            <div class="container bg-dark text-white pb-3 mb-3" style="border-radius: 5px; max-width: 80%">
                <?php for($i = 0; $i<$menu_list; $i++) {
                    $select_query = mysqli_query($con, "SELECT * FROM food_table where restaurant_id = '$restaurant_id' ");
                    $menu = mysqli_fetch_array($select_query);
                    echo "<p class='px-3 pt-5 pb-2 float-start'>".$menu['food_name']."</p>"."<p class='pt-5 pb-2 text-center'>". $menu['price'] . "<span class='px-2 mb-5 float-end'>Total order: ". sprintf('%02s', $value['total']) ."</a></p>";
                } ?>

                <h4 class="text-center ps-2 pt-5">Want to add food?</h4>
                <form class="form-group p-5" action="add_item.php" method="get">
                    <div class="text-center">
                        <div class="form-group">
                            <input type="text" name="foodName" id="foodName" placeholder="Food Name" class="form-style mb-4" autocomplete="none" required size="35" style="overflow: auto">
                        </div>
                        <div class="form-group">
                            <input type="text" name="foodPrice" id="foodPrice" placeholder="Food Cost" class="form-style mb-4" pattern="^[0-9]*\.[0-9][0-9]$" title="Please input a decimal number upto 2 decimal point. eg. 50.00" autocomplete="none" required size="35" style="overflow: auto">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-outline-info btn-lg" type="submit" value="Submit" name="addButton" id="addButton">
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!--another group-->
        <div class="container text-center">
            <form class="form-group p-5" action="add_info.php" method="get">
                <div class="text-center">
                    <div class="form-group">
                        <input type="text" name="restaurantType" id="restaurantType" placeholder="Restaurant Type" class="form-style mb-4" autocomplete="none" size="35" style="overflow: auto" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="restaurantRating" id="restaurantRating" placeholder="Restaurant Rating" class="form-style mb-4" pattern="^[0-5]*\.[0-9]$" title="Please input a decimal number upto 1 decimal point. eg. 4.2" autocomplete="none" size="35" style="overflow: auto" required >
                    </div>

                    <input class="form-check-input mb-5" type="checkbox" name="vegetarian" id="vegetarian" > Vegetarian Restaurant

                    <div class="form-group">
                        <input class="btn btn-outline-dark btn-lg" type="submit" value="Submit" name="addDetailButton" id="addDetailButton">
                    </div>
                </div>
            </form>
        </div>
    </main>


    <!--footer part-->
    <?php
        include "./includes/footer.php";
    ?>


    <!--Jquery CDN-->
    <script src="js/Jquery/jquery-3.5.1.min.js"></script>
    <!--Bootstrap Javascript cdn-->
    <script src="js/Bootstrap/bootstrap.min.js"></script>

</body>
</html>
