<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">


</head>
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="Images/WackyWaveLogo.png" width="25" height="25" class="d-inline-block align-top" alt="">
                WackyWave
            </a>

            <div class="collapse navbar-collapse justify-content-end font-weight-bold" id="navbarToggler">
                <div class="navbar-nav nav-tabs bg-transparent border-bottom-0">
                    <a class="nav-item nav-link bg-transparent" href="index.php">Home</a>
                    <a class="nav-item nav-link active bg-transparent border-0" href="catalog.php">Shop</a>
                    <a class="nav-item nav-link bg-transparent" href="about_us.php">About Us</a>
                    <a class="nav-item nav-link bg-transparent" href="origin_story.php">Origins</a>
                    <a class="nav-item nav-link bg-transparent" href="reviews.php">Reviews</a>
                    <a class="nav-item nav-link bg-transparent" href="account.php">Account</a>
                    <?php if (isset($_SESSION['username'])) : ?>
                        <a class="nav-item nav-link bg-transparent" href="catalog.php?logout='1'">Logout</a>
                        <a class="nav-item nav-link bg-transparent" href="cart.php">
                            <img src="Images/cart.svg">
                        </a>
                    <?php endif ?>
                    <?php if (!isset($_SESSION['username'])) : ?>
                        <a class="nav-item nav-link bg-transparent" href="login.php">Log in</a>
                    <?php endif ?>
                </div>
            </div>
        </nav>
    </div>
</header>
<body>
<main>
    <div class="row origin-bg">
        <div class="col-2">
            <div class="card p-0 m-2 mt-2">
                <div class= "card-header bg-secondary text-white text-center">Color</div>
                <ul class="list-inline">
                    <li class="p-2 ml-0 text-center">
                        <a href="catalog.php?type=Yellow" class="text-dark">Yellow</a>
                    </li>
                    <li class="p-2 text-center">
                        <a class="text-dark" href="catalog.php?type=Red">Red</a>
                    </li>
                    <li class="p-2 text-center">
                        <a class="text-dark" href="catalog.php?type=Blue">Blue</a>
                    </li>
                    <li class="p-2 text-center">
                        <a class="text-dark" href="catalog.php">All</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-10 pre-scrollable">

            <?php
            $link = mysqli_connect("sql105.epizy.com", "epiz_23073061", "finalproject", "epiz_23073061_FinalProject");
            // Check connection
            $query = "SELECT * FROM Products";
            $items = mysqli_query($link, $query);
            if (mysqli_num_rows($items) > 0) {
                while ($row = mysqli_fetch_assoc($items)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $company = $row['company'];
                    $stock = $row['stock'];
                    $price = $row['price'];
                    $pic = $row['pic'];
                    $color = $row['color'];
                    if (isset($_GET['type'])){
                        $type = $_GET['type'];
                        if ($color == $type) {
                            echo '<div class="row bg-white mt-2 rounded border border-info">
                <div class="col-2">
                    <img src="' . $pic . '" height=150>
                </div>
                <div class="col-8 bg-light">
                    <a href="product.php?id=' . $id . '"><strong>' . $title . '</strong></a><br><small>' . $company . '</small>
                    <div class="mt-2">
                        ' . $description . '
                    </div>
                </div>
                <div class="col-2 bg-light text-right">
                    <div>
                        In Stock: ' . $stock . '
                    </div>
                    <div class="mt-3">
                        <strong>&curren;' . $price . '</strong>
                    </div>
                </div>
            </div>';
                        }
                    }
                    else{
                        echo '<div class="row bg-white mt-2 rounded border border-info">
                <div class="col-2">
                    <img src="' . $pic . '" height=150>
                </div>
                <div class="col-8 bg-light">
                    <a href="product.php?id=' . $id . '"><strong>' . $title . '</strong></a><br><small>' . $company . '</small>
                    <div class="mt-2">
                        ' . $description . '
                    </div>
                </div>
                <div class="col-2 bg-light text-right">
                    <div>
                        In Stock: ' . $stock . '
                    </div>
                    <div class="mt-3">
                        <strong>&curren;' . $price . '</strong>
                    </div>
                </div>
            </div>';
                    }
                }
            }
            ?>


        </div>
    </div>



</main>

</body>
</html>
