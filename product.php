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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<header>
    <div>
        <nav class="navbar navbar-expand-lg bg-transparent navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-white" href="index.php">
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
<?php
$link = mysqli_connect("sql105.epizy.com", "epiz_23073061", "finalproject", "epiz_23073061_FinalProject");
$query = "SELECT * FROM Products";
$items = mysqli_query($link, $query);
if (mysqli_num_rows($items) > 0) {
    while ($row = mysqli_fetch_assoc($items)) {
        $id = $_GET['id'];
        if($id == $row['id']){
            echo '<div class="row p-2">
    <div class="col-4">
    <div class="h2">
    '.$row['title'].'
    </div>
        
        <br>
        <img src="'.$row['pic'].'">
    </div>
    <div class = "col-5">
    <div class = "card-header bg-dark text-white text-center">
    Description
    </div>
    <div class = "card-body">
    '.$row['description'].'
    <br><br>
    Color: '.$row['color'].'
    <br><br>
    Company: '.$row['company'].'
    </div>
    </div>
    <div class="col-3">
        <div class="card-header bg-dark text-white text-center">
            Reviews
        </div>
        <div class="card-body">
            <div class="d-inline">';
            $starCount = $row['stars'];
            for($i = 0; $i < $starCount; $i++){
                echo '<span class="fa fa-star text-warning"></span>';
            }
            $left = 5 - $starCount;
            for($i = 0; $i < $left; $i++){
                echo '<span class="fa fa-star"></span>';
            }
            echo'
            </div>
        </div>
            <div class="card-header bg-dark text-white mt-2 text-center">
                Add to cart
            </div>
            <div class="card-body">
                In stock: '.$row['stock'].'<br><br>
                Price: '.$row['price'].'<br><br>
                <button>Add To Cart</button>
        </div>
    </div>
</div>
<div class="row card-body">
    <div class="col-12">
        <div class="card-header">
            Additional Information
        </div>
        <div class="card-body">
           Dimensions: '.$row['dimensions'].'
           
        </div>
    </div>
</div>';
        }
    }
}
?>

</body>
</html>
