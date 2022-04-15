<?php
    include "includes/common.php";
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }
    $query = mysqli_query($con, "SELECT food_table.food_id, food_table.food_name, food_table.price, order_history.count, order_history.status, order_history.order_id FROM order_history INNER JOIN food_table ON order_history.food_id = food_table.food_id where order_history.user_id = '".$_SESSION['id']."' and order_history.status ='Added to cart'");
    $rows = mysqli_num_rows($query);
    $slno = 1;
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

    <!--main -->
    <main>
        <div class="container mt-5">
            <h3 class="text-danger">My Cart</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Sl No.</th>
                    <th>Product Detail</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    for($x=0; $x<$rows; $x++) {
                        $order = mysqli_fetch_array($query);
                ?>
                <tr>
                    <td><?php echo $slno++ ?></td>
                    <td><?php echo $order['food_name'] ?></td>
                    <td><?php echo $order['count'] ?></td>
                    <td>Rs. <?php echo (double)$order['count']*$order['price'] ?></td>
                    <td>
                        <a href="place_order.php?id=<?php echo $order['order_id'] ?>" class="btn btn-success" type="submit" name="btn_place_order" id="bt_place_order">Place Order</a>
                        <a href="cart_remove.php?id=<?php echo $order['order_id'] ?>" class="btn btn-danger" type="submit" name="btn_remove" id="btn_remove">Remove</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <!--footer part-->
    <div class="fixed-bottom">
        <?php
            include "./includes/footer.php";
        ?>
    </div>


<!--Jquery CDN-->
<script src="js/Jquery/jquery-3.5.1.min.js"></script>
<!--Bootstrap Javascript cdn-->
<script src="js/Bootstrap/bootstrap.min.js"></script>

</body>
</html>