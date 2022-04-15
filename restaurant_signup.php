<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/solid.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Restaurant Signup</title>
</head>
<body>

    <!--Header section-->
    <header>
        <?php
        include "./includes/header.php";
        ?>
    </header>

    <form action="includes/restaruant_signup_check.php" method="post" class="form-group p-5 mt-5 ">
        <div class="text-center">
            <h4>Restaurant Signup</h4>
            <div class="form-group">
                <input type="text" name="restaurantSignName" id="restaurantSignName" class="form-style"
                       placeholder="Restaurant's Name" autocomplete="none" required>
                <i class="input-icon uis uis-head-side"></i>
            </div>
            <div class="form-group mt-3">
                <input type="email" name="restaurantSignEmail" id="restaurantSignEmail" class="form-style"
                       placeholder="Restaurant's Email" autocomplete="none" required>
                <i class="input-icon uis uis-at"></i>
            </div>
            <div class="form-group mt-3">
                <input type="text" name="restaurantSignId" id="restaurantSignId" class="form-style"
                       placeholder="Restaurant's Id" autocomplete="none" required>
                <i class="input-icon uis uis-store-slash"></i>
            </div>
            <div class="form-group mt-3">
                <input type="password" name="restaurantSignPassword" id="restaurantSignPassword" class="form-style"
                       placeholder="Password" autocomplete="none" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                       title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                       required>
                <i class="input-icon uis uis-lock"></i>
            </div>

            <input type="submit" id="restaurantSignSubmit" name="restaurantSignSubmit" class="btn btn-login mt-4 ">
            <p class="mb-3 mt-4 text-center">
                <a href="restaurant_login.php" class="link">Already Account?</a><br>
                <a href="login.php" class="link">Customer Login</a>
            </p>
        </div>


    </form>


    <!--Footer section-->
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