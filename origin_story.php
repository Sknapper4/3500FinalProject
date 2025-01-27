<?php session_start(); ?>
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

    <title>The Fresh... Wave?</title>
</head>
<body>

<div class="ml-2 mr-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">
            <img src="Images/WackyWaveLogo.png" width="25" height="25" class="d-inline-block align-top" alt="">
            WackyWave
        </a>


        <div class="collapse navbar-collapse justify-content-end font-weight-bold" id="navbarTogglerDemo02">
            <div class="navbar-nav nav-tabs bg-transparent border-bottom-0">
                <a class="nav-item nav-link bg-transparent" href="index.php">Home <span
                            class="sr-only">(current)</span></a>
                <a class="nav-item nav-link bg-transparent" href="catalog.php">Shop</a>
                <a class="nav-item nav-link bg-transparent" href="about_us.php">About Us</a>
                <a class="nav-item nav-link active bg-transparent border-0" href="origin_story.php">Origins</a>
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
<div class="row justify-content-center origins-bg">
    <div class="col-6 mt-4 p-0">
        <div class="content-bg text-center p-4 m-0">
            <h2>This here's a story all about how,</h2>
            <p>Our lives got wavy and wacky all around,
                <br>We've a story to tell, if an ear you'll lend,
                <br>About how we came to sell these wacky wavy men
                <br>
                <br>
                <br>In southwest Michigan, bored and dazed
                <br>At the laptop, where we learned most of our ways
                <br>Waving out, wacky, flailing all cool
                <br>We were building some inflatables with all of our tools
                <br>When a couple of guys, they didn't like our fun
                <br>Started making jokes about how the fans run
                <br>We made one little comment and our parents got tense
                <br>They said, "You're gonna start a business to sell these waving men"
                <br>
                <br>
                <br>We went to find a place that's as crazy as us
                <br>License plate said "wavy" and it was a wacky bus
                <br>When the bus took off, it went around the bend
                <br>We started making calls to sell some tube men
                <br>
                <br>
                <br>We stopped at a warehouse around 6 o'clock
                <br>We texted the bullies, now this they can't mock
                <br>We looked at the building, this place was a ten
                <br>We were ready to sell some wacky wavy men
            </p>

        </div>

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
