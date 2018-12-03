<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create account</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/signUpValidation.js"></script>

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
            <a class="nav-item nav-link bg-transparent" href="account.php">Account</a>
            <a class="nav-item nav-link bg-transparent" href="login.php">Log in</a>
        </div>
    </div>
</nav>
<div class="row justify-content-center mt-5">
    <div class="col-4 card border-1 border-info p-2">
        <h3 class="text-center mt-2 mb-0">Sign Up</h3>
        <form method="post" id="signUp" action="register.php">
            <?php include('errors.php'); ?>
            <div class="form-group">
                <label class="font-weight-bold">Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" id="username"
                       class="form-control border-info required">
            </div>
            <div class="form-group mt-2">
                <label for="email" class="font-weight-bold">Email address</label>
                <input type="email" class="form-control border-info required" id="email"
                       aria-describedby="emailHelp"
                       placeholder="Enter email" value="<?php echo $email; ?>" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                </small>
            </div>
            <div class="row justify-content-between">
                <div class="form-group col-6">
                    <label for="password" class="font-weight-bold">Password</label>
                    <input type="password" class="form-control border-info required password" id="password"
                           placeholder="Password" name="password">
                </div>
                <div class="form-group col-6">
                    <label for="confirmPassword" class="font-weight-bold">Confirm Password</label>
                    <input type="password" class="form-control border-info required password" id="confirmPassword"
                           placeholder="Confirm Password" name="confirmPassword">
                </div>
            </div>
            <div class="input-group">
                <button type="submit" value="Submit" class="btn btn-primary" name="reg_user">Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>
</div>
</body>
</html>


