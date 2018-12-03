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
<body>
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
                <a class="nav-item nav-link bg-transparent" href="catalog.php">Shop</a>
                <a class="nav-item nav-link bg-transparent" href="about_us.php">About Us</a>
                <a class="nav-item nav-link bg-transparent" href="origin_story.php">Origins</a>
                <a class="nav-item nav-link bg-transparent" href="reviews.php">Reviews</a>
                <a class="nav-item nav-link bg-transparent" href="account.php">Account</a>
                <?php if (isset($_SESSION['username'])) : ?>
                    <a class="nav-item nav-link bg-transparent" href="catalog.php?logout='1'">Logout</a>
                <?php endif ?>
                <?php if (!isset($_SESSION['username'])) : ?>
                    <a class="nav-item nav-link bg-transparent" href="login.php">Log in</a>
                <?php endif ?>
            </div>
        </div>
    </nav>
</div>
<h1 class="display-1"><?php $username = $_SESSION['username'];?></h1>
<main class="">
    <div class="row mt-2">
        <div class="col-2">

        </div>
        <div class="col-8">
            <div class="mt-5 card-header text-center">
                <?php
                echo $username;
                ?>
            </div>
            <div class="card-body bg-light p-3 text-center">
                <?php
                $link = mysqli_connect("sql105.epizy.com", "epiz_23073061", "finalproject", "epiz_23073061_FinalProject");
                // Check connection
                $query = "SELECT * FROM Cart WHERE Username = '$username';";
                $items = mysqli_query($link, $query);
                if (mysqli_num_rows($items) > 0) {
                    echo '<div class="row mt-2">
                            <div class="col-8">
                            Title
                            </div>
                            <div class="col-2">
                            Price
                            </div>
                            
                        </div>';
                    while ($row = mysqli_fetch_assoc($items)) {
                        $id = $row['ProductID'];
                        $query = "SELECT * FROM Products WHERE id = $id;";
                        $i = mysqli_query($link, $query);
                        $item = mysqli_fetch_assoc($i);
                        echo '<div class="row">
                            <div class="col-8">
                            '.$item['title'].'
                            </div>
                            <div class="col-2">
                            &curren'.$item['price'].'
                            </div>
                            
                        </div>';
                    }
                }
                if(mysqli_num_rows($items) == 0){
                    echo 'There are no items in your cart.<br><br><br>';
                    echo '<a href="catalog.php" class="btn bg-info mt-3 text-white">Shop Now</a>';
                }
                ?>
                <br><br><br><br>
            </div>
        </div>
        <div class="col-2">

        </div>
    </div>
</main>


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
<?php

?>

