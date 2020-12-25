<?php
    include "includes/common.php";
    if (isset($_SESSION['email'])) {
        header('location: product.php');
    }
?>

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
    <title>Login</title>
</head>
<body>

    <!--Header section-->
    <header>
        <?php
            include "./includes/header.php";
        ?>
    </header>


    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-3 text-center">
                        <input type="checkbox" name="toggler" class="checkbox" id="toggler">
                        <label for="toggler"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <form id="login_form" action="includes/user_login.php" method="post" class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Login</h4>
                                            <div class="form-group">
                                                <input type="email" name="userEmail" id="userEmail" class="form-style"
                                                       placeholder="User's Email" autocomplete="none" required>
                                                <i class="input-icon uis uis-at"></i>
                                            </div>
                                            <div class="form-group mt-3">
                                                <input type="password" name="userPassword" id="userPassword" class="form-style"
                                                       placeholder="Password" autocomplete="none" required>
                                                <i class="input-icon uis uis-lock"></i>
                                            </div>
                                            <input type="submit" id="userSubmit" name="userSubmit" class="btn btn-login mt-4 ">
                                            <p class="mb-0 mt-4 text-center">
                                                <a href="404.php" class="link">Forgot Password?</a><br>
                                                <p class="mb-0">Need a Account?<br> <em>Click on Toggle Button</em></p>
                                                <a href="restaurant_login.php" class="link">Restaurant Login</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                                <form id="signup_form" action="includes/user_sign.php" method="post" class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Create account</h4>
                                            <div class="form-group">
                                                <input type="text" name="userSignName" id="userSignName" class="form-style"
                                                       placeholder="User's Name" autocomplete="none" required>
                                                <i class="input-icon uis uis-head-side"></i>
                                            </div>
                                            <div class="form-group mt-3">
                                                <input type="email" name="userSignEmail" id="userSignEmail" class="form-style"
                                                       placeholder="User's Email" autocomplete="none" required>
                                                <i class="input-icon uis uis-at"></i>
                                            </div>
                                            <div class="form-group mt-3">
                                                <input type="password" name="userSignPassword" id="userSignPassword" class="form-style"
                                                       placeholder="Password" autocomplete="none" required>
                                                <i class="input-icon uis uis-lock"></i>
                                            </div>
                                            <input type="submit" id="userSignSubmit" name="userSignSubmit" class="btn btn-login mt-4 ">
                                            <p class="mb-0 mt-4 text-center">
                                                Already Account? <em>Click on Toggle Button</em>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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