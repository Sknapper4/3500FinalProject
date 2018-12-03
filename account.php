<?php
include('server.php');
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
$db = mysqli_connect("sql105.epizy.com", "epiz_23073061",
    "finalproject", "epiz_23073061_FinalProject");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">

    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?php echo $_SESSION['username']; ?></title>
</head>
<body>
<div class="ml-2 mr-2">
    <nav class="navbar navbar-expand-lg navbar-light">
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
                <a class="nav-item nav-link bg-transparent" href="index.php">Home <span
                        class="sr-only">(current)</span></a>
                <a class="nav-item nav-link bg-transparent" href="catalog.php">Shop</a>
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
<div class="row text-center justify-content-center mt-5">
    <div class"col-6 text-center">
    <h1><?php echo $_SESSION['username']; ?>'s Profile</h1>
</div>
</div>
<div class="row mt-3 ml-5 justify-content-center">
    <div class="col-2 border-1 border text-center justify-content-center">
        <img src="Images/deoxys.png" width=150 height=150>
    </div>

</div>
<div class="row mt-3 ml-5 justify-content-center">
    <div class="col-2 text-center justify-content-center">
        <form class="mt-2" action="account.php" method="POST">
            <div class="form-group">
                <label class="font-weight-bold">Username</label>
                <input type="text" name="username" class="form-control border-info required">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Password</label>
                <input type="password" name="password" class="form-control border-info required">
            </div>
            <input class="btn btn-info" name="remove" type="submit" value="Remove Account">
        </form>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
