<?php
    include "includes/common.php";
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }
    if(isset($_SESSION['rest_email'])){
        header("location: product_add.php");
    }

    $id = $_GET['menu_id'];
    $menu_query = mysqli_query($con, "SELECT * FROM food_table where restaurant_id = '$id'");
    $menu_list = mysqli_num_rows($menu_query);
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
        <div class="container-fluid" style="background-color: #9a9">
            <div class="container py-2 text-end">
                <a href="cart.php" class="text-decoration-none text-dark" style="font-size: 20px"><i class="fa fa-cart-plus text-success">&nbsp;&nbsp;</i>Food Cart</a>
            </div>
        </div>
    </header>


    <!--main part-->
    <main>
        <div class="container">
            <h2 class="py-3 text-info text-center"><?php echo "Hello ".$_SESSION['user']?></h2>
            <div class="container bg-dark text-white pb-3 mb-3" style="border-radius: 5px; max-width: 80%">
                <?php $sel_query = mysqli_query($con, "SELECT * FROM food_table where restaurant_id = $id");
                for($k = 0; $k<$menu_list; $k++) {
                    $menu_items = mysqli_fetch_assoc($sel_query);
                    echo "<p class='px-3 pt-5 pb-2 float-start'>".$menu_items['food_name']."</p>"."<p class='pt-5 pb-2 text-center'>". $menu_items['price'] . "<a href='cart_add.php?id=".($menu_items['food_id'])."' type='button' class='btn btn-outline-light mb-5 float-end'>Add to cart</a></p>";
                }
                ?>

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