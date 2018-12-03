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

    <title>About Wacky Wave</title>
</head>
<body>
<div class="p-0">
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
                <a class="nav-item nav-link bg-transparent active border-0" href="about_us.php">About Us</a>
                <a class="nav-item nav-link bg-transparent" href="origin_story.php">Origins</a>
                <a class="nav-item nav-link bg-transparent" href="reviews.php">Reviews</a>
                <a class="nav-item nav-link bg-transparent" href="account.php">Account</a>
                <?php if (isset($_SESSION['username'])) : ?>
                <a class="nav-item nav-link bg-transparent" href="catalog.php?logout='1'">Logout</a>
                <a class="nav-item nav-link bg-transparent" href="cart.php">
                    <img src="Images/cart.svg">
                </a>
            </div>
            <?php endif ?>
            <?php if (!isset($_SESSION['username'])) : ?>
                <a class="nav-item nav-link bg-transparent" href="login.php">Log in</a>
            <?php endif ?>
        </div>
    </nav>
    <div class="about-us-bg">
        <div class="row justify-content-center">
            <div class="col-4 info-bg m-5 text-center">
                <h2>Stephen Knapper</h2>
                <img class="sm-img" src="Images/Magellan_laughing.jpg" alt="" />
                <p>Hello, I'm Stephen! I'm a sophomore a WMU, I obviously love my cat, and I major in both computer science and data science. I first got interested in programming when I was 18. My older brother went to school for a CS degree and he showed me some of the stuff he did and it piqued my interest. I began programming a little on the side, just some HTML, CSS, and a small amount of Python. I was unsure about going to school so I enlisted in the Marine Corps Reserves.<br /> After training, I came back home and applied to go to school. I got accepted into WMU and joined the CS program. Going to school has really engaged me in the CS community. Last May, I attended Pycon in Cleveland, OH. I had a lot of fun, learned an immense amount, and even ended up leaving with 16 free shirts and more! I also started attending Hackathons in the area. I highly encourage people to go, I always learn a lot and MLH Hackathons are free for students!</p>
            </div>
            <div class="col-4 info-bg m-5 text-center">
                <h2>William Stankus</h2>
                <img class="sm-img" src="Images/IMG_4729.jpeg" alt="" />
                <p>I'm Will, a sophomore at WMU. I'm majoring in computer science and minoring in math. I got interested in programming because of all the different things I could create. The major is so broad that you can explore many different roads with it, and obviously the money intrigued me. Currently I know Java and Swift. The most enjoyment I get from coding is making apps. Currently, I am working on an app that is estimated to be on the app store by Christmas. Be sure to check out Gym Rat.<br /> Apart from coding, I enjoy working out and playing basketball at the Rec Center. I played intramural basketball both seasons last year. We made it to the championship first semester and lost; Hoping to get a win before I graduate. Also, 2k19 consumes a lot of my time. For anyone wondering my team is a 89 overall. gt: Stankus14 for anyone wanting to play me.</p>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript --><!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script></body>
</html>
