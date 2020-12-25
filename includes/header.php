
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="../FoodShala/index.php"><img src="../FoodShala/images/foodshala.png" alt="FoodShala" width="200px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <?php
                    if(isset($_SESSION['email'])){ ?>

                <li class="nav-item">
                    <a class="nav-link" href="../FoodShala/404.php"><button class="btn btn-outline-warning"><?php echo $_SESSION['user'] ?></button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3" href="../FoodShala/logout.php">Logout</a>
                </li>

                <?php
                    } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link py-3" href="../FoodShala/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../FoodShala/login.php"><button class="btn btn-outline-success">Create an account</button></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>