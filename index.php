<?php
    include "includes/common.php";
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

    <link href="css/main.css" rel="stylesheet">
    <title>FoodShala</title>

</head>
<body>

    <!--Splash screen for FoodShala-->
    <div class="splash">
        <h1 class="fade-in">
            <picture>
                <source srcset="images/splash_foodshala.png" media="(max-width: 600px)">
                <img src="images/splash_foodshala_big.png" alt="FoodShala">
            </picture>
        </h1>
    </div>


    <!--Header File-->
    <header>
        <?php
            include "./includes/header.php";
        ?>
    </header>

    <!--Banner Image-->

    <main>
        <div id="banner-image">
            <div class="container">
                <div style="margin-top: 12%;">
                    <div class="ms-5 banner-text-gradient">
                        <h1>Order Food Online</h1>
                        <h4>From the best Restaurants to your Doorstep</h4>
                    </div>

                    <div id="banner-content">
                        <form class="px-3 pt-3 pb-1" action="product.php" method="get">
                            <div class="input-group mb-3">
                                <input
                                        type="search"
                                        class="form-control form-control-lg"
                                        placeholder="Search your cuisine..."
                                        aria-label="Search your cuisine..."
                                        aria-describedby="button-addon2"
                                />
                                <button
                                        onclick="window.location('product.php')"
                                        class="btn btn-success"
                                        type="submit"
                                        id="button-addon2"
                                        data-mdb-ripple-color="dark">Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!--Main contents-->
        <div class="container mt-lg-5 mt-sm-3">
            <div class="row text-center">
                <h2 style="color: #146c43">What FoodShala offers</h2>
                <h5>Ordering food becomes soo much easy</h5>
            </div>
            <div class="row mt-lg-5 mt-sm-3">
                <div class="col-lg-3 pt-5 col-md-6 col-sm-12">
                    <img src="images/choose_food.png" width="100%">
                    <h4 class="py-5 mt-5">Freshly Prepared Food</h4>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-12">
                    <img src="images/food_menu.png" width="100%">
                    <h4 class="py-4">Variety range of Foods</h4>
                </div>
                <div class="offset-lg-2 col-lg-3 col-md-6 col-sm-12">
                    <img src="images/food_delivery.png" width="100%">
                    <h4 class="py-4">From Restaurants to Home: Doorstep delivery</h4>
                </div>
            </div>
        </div>
    </main>


    <!--footer part-->
    <?php
        include "./includes/footer.php";
    ?>

    <script src="js/main.js"></script>
    <!--Jquery CDN-->
    <script src="js/Jquery/jquery-3.5.1.min.js"></script>
    <!--Bootstrap Javascript cdn-->
    <script src="js/Bootstrap/bootstrap.min.js"></script>

</body>
</html>