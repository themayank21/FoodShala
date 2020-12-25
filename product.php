<?php
    include "includes/common.php";
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }
    $query = mysqli_query($con, "SELECT * FROM restaurant_table");
    $rows = mysqli_num_rows($query);
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

    <div class="container-fluid" style="background-color: #9a9">
        <div class="container py-2 text-end">
            <a href="cart.php" class="text-decoration-none text-dark" style="font-size: 20px"><i class="fa fa-cart-plus text-success">&nbsp;&nbsp;</i>Food Cart</a>
        </div>
    </div>


    <main class="py-5">
        <div class="container">
            <h2>Order food Online:</h2>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-12">
                    <form class="form-check py-3" action="">
                        <label for="vegetarian" class="form-check-label">Veg</label><input class="form-check-input" type="radio" name="vegetarian" id="vegetarian"><br>
                        <label for="nonVegetarian" class="form-check-label">Non-veg</label><input class="form-check-input" type="radio" name="vegetarian" id="nonVegetarian">
                    </form>
                    <hr>
                    <form class="form-group py-3">
                        <input type="text" placeholder="Search items" name="search_bar" id="search_bar">
                    </form>
                    <p style="font-size: 22px; font-weight: bold">Sort by:</p>
                    <a href="#" class="mb-0 text-decoration-none text-dark">South Indian</a><br>
                    <a href="#" class="mb-0 text-decoration-none text-dark">Italian</a><br>
                    <a href="#" class="mb-0 text-decoration-none text-dark">Chinese</a>
                </div>
                <div class="col-lg-10 col-md-6 col-sm-12" >
                    <div class="row">
                        <?php for($var=0; $var<$rows; $var++) {
                            $query_rest = mysqli_query($con, "SELECT * FROM restaurant_table where restaurant_id = 1+'$var'");
                            $values = mysqli_fetch_array($query_rest);
                        ?>
                        <!--1st restaurant details-->
                        <div class="col-lg-5 mt-5" style="border-radius: 5px">
                            <div class="card bg-dark text-white">
                                <div class="container">
                                    <div class="row">
                                        <!--Card Image-->

                                        <div class="col-4 p-3 ">
                                            <img src="images/cuisine01.jpg" class="mt-3" width="100%" style="border-radius: 7px; box-shadow: 0 3px 3px 0">
                                        </div>
                                        <!--card body-->
                                        <div class="col-7 p-3">
                                            <small><?php echo $values['type'] ?></small>
                                            <a href="404.php" class="text-decoration-none"><h4 class="text-restaurant"><?php echo $values['restaurant_name'] ?></h4></a>
                                            <small>
                                                <?php for($i=0; $i<floor($values['restaurant_rating']); $i++) { ?>
                                                <i class="fa fa-star text-warning"></i>
                                                <?php } for($j=floor($values['restaurant_rating']); $j<5; $j++) { ?>
                                                <i class="fa fa-star text-light"></i>
                                                <?php }
                                                echo $values['restaurant_rating']; ?>
                                            </small>
                                        </div>
                                    </div>
                                    <hr>
                                    <!--Card bottom-->
                                    <div class="row">
                                        <div class="col-5 mx-auto">
                                            <a href="404.php" type="button" class="btn btn-outline-light mb-3" >Check menu</a>
                                        </div>
                                        <div class=" offset-2 col-5 mx-auto">
                                            <a href="cart.php" type="button" class="btn btn-outline-success mb-3">Order Special</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
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