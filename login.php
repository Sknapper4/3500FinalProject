<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
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
            <a class="nav-item nav-link bg-transparent active border-0" href="login.php">Log in</a>
        </div>
    </div>
</nav>

<div class="row justify-content-center">
    <div class="col-4 card border-1 border-info p-2">
        <h3 class="text-center">Login</h3>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="form-group">
                <label class="font-weight-bold">Username</label>
                <input type="text" name="username" class="form-control border-info required">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Password</label>
                <input type="password" name="password" class="form-control border-info required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info" name="login_user">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
    </div>
</div>
</body>
</html>