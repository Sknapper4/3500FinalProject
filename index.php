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

    <title>Wacky Wave</title>
</head>
<body>
<div class="ml-2 mr-2">
    <div class="landing-bg">
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
                    <a class="nav-item nav-link active bg-transparent border-0" href="index.php">Home <span
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
        <div class="col-4 float-left text-center mt-5 ml-lg-5 ">
            <?php if (isset($_SESSION['username'])) : ?>
                <h2 class="text-white">Welcome, <?php echo $_SESSION['username']; ?></h2>
                <a class="text-white btn no btn-info" href="catalog.php">Shop Now</a>
            <?php endif ?>
            <?php if (!isset($_SESSION['username'])) : ?>
                <h2 class="text-white">Welcome</h2>
                <a class="text-white btn no btn-info" href="login.php">Login</a>
            <?php endif ?>
        </div>
    </div>
    <div class="card text-center" id="cards">
        <div class="card-header bg-transparent">
            <ul class="nav nav-tabs card-header-tabs justify-content-center">
                <li class="nav-item mt-2 font-weight-bold">
                    <a class="nav-link" data-toggle="collapse" href="#about">Meet the Developers</a>
                </li>
                <li class="nav-item mt-2 font-weight-bold">
                    <a class="nav-link" data-toggle="collapse" href="#made">How we Started</a>
                </li>
                <li class="nav-item mt-2 font-weight-bold">
                    <a class="nav-link" data-toggle="collapse" href="#review">Reviews</a>
                </li>
            </ul>
        </div>

        <div class="card-body collapse p-0" id="about" data-parent="#cards">
            <div class="row pl-2 pr-2 mb-0 mt-4 justify-content-center">
                <div class="col-sm-4 col-6-size mb-0">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img sm-img p-1 mt-0" src="Images/Magellan.JPG" alt="Kitten">
                            <h5 class="card-title">Stephen Knapper</h5>
                            <p class="card-text font-weight-normal">This is a picture of Stephen, wearing a Google shirt he got from Pycon and
                                holding his kitten, Magellan. This picture is a pretty accurate depiction of who Stephen is. He likes
                                technology and cats.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-6-size mb-0">
                    <div class="card">
                        <div class="card-body">
                            <img src="Images/IMG_4729.jpeg" class="card-img sm-img p-1 mt-0" alt="Will">
                            <h5 class="card-title">Will Stankus</h5>
                            <p class="card-text font-weight-normal">This is a picture of Will. He is experienced in making apps,
                                and is trying to create a passive income source through his apps.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary m-3" href="about_us.html">Read More</a>
        </div>
        <div class="card-body collapse p-0" id="made" data-parent="#cards">
            <h4 class="card-title pt-4 pb-2">Like who is Wacky Wave</h4>
            <h6>How'd we get started?</h6>
            <p class="card-text mt-1 font-weight-normal">Told in the form of parody!
                Everything in this story is true.
                <br>Only the people, places, and events have been changed.</p>
            <p class="card-text"> </p>
            <a href="origin_story.html" class="btn btn-primary m-3">The Origins</a>
        </div>
        <div class="card-body collapse p-0" id="review" data-parent="#cards">
            <h5 class="card-title p-4">Check Out These Wacky Reviews</h5>
            <div class="row pl-3 pr-3">
                <div class="col-sm-3">
                    <div class="card review-card">
                        <div class="card-body">
                            <h5 class="card-title sticky-top bg-white">These inflatables saved my marriage!!</h5>
                            <div class="d-inline">
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <!--<button class="btn btn-sm btn-5star ml-1 text-center">5 Stars</button>-->
                            </div>
                            <p class="card-text font-weight-normal">Best decision I ever made.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card review-card">
                        <div class="card-body">
                            <h5 class="card-title sticky-top bg-white">Didn't wave enough.</h5>
                            <div class="d-inline">
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <!--<button class="btn btn-sm btn-warning ml-1 text-center text-white">3 Stars</button>-->
                            </div>
                            <p class="card-text font-weight-normal">I thought it would wave more. But it doesn't. I was expecting
                                constant waving and lightning fast movement. Still cool so I gave it 3 stars.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card review-card">
                        <div class="card-body">
                            <h5 class="card-title sticky-top bg-white">Third best decision of my life.</h5>
                            <div class="d-inline">
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star"></span>
                                <!--<button class="btn btn-sm btn-4star ml-1 text-center">4 Stars</button>-->
                            </div>
                            <p class="card-text font-weight-normal">Second best decision was a pooper scooper. It's WAY easier
                                to clean up after my pet wolf. The best purchase I ever made was the wolf. Anyway the inflatable man
                                is cool. Wasn't as fun as I hoped, that's why only 4. Wolf loves to watch it wave.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card review-card">
                        <div class="card-body">
                            <h5 class="card-title sticky-top bg-white">Not as tall as they say!!!!!!!!!</h5>
                            <div class="d-inline">
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <!--<button class="btn btn-sm btn-1star ml-1 text-center">1 Star</button>-->
                            </div>
                            <p class="card-text font-weight-normal">They said it was 6ft! 6FT!!!! They lied.
                                It was 5ft and 11 inches! I want a refund!</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary m-3" href="reviews.html">More Reviews</a>
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
