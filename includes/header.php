
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/foodshala.png" alt="FoodShala" width="200px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <!--user header-->
                <?php
                    if(isset($_SESSION['email'])){ ?>

                <li class="nav-item">
                    <a class="nav-link" href="404.php"><button class="btn btn-outline-warning"><?php echo $_SESSION['user'] ?></button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3" href="logout.php">Logout</a>
                </li>

                <!--restaurant header-->
                <?php
                    }
                    elseif(isset($_SESSION['rest_email'])){ ?>

                    <li class="nav-item">
                        <a class="nav-link" href="404.php"><button class="btn btn-outline-warning"><?php echo $_SESSION['rest_user'] ?></button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" href="logout.php">Logout</a>
                    </li>

                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link py-3" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><button class="btn btn-outline-success">Create an account</button></a>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>