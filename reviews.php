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

    <title>Reviews</title>
</head>


<body>
<div class="mr-2 ml-2">

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

<div class="reviews-bg p-2">
    <div class="row justify-content-center">
        <div class="col-sm-11">
            <!-- Button trigger modal -->
            <div class="text-center justify-content-center">
                <button type="button" class="btn btn-dark text-center" data-toggle="modal" data-target="#reviewForm">
                    Write a Review
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="reviewForm" tabindex="-1" role="dialog" aria-labelledby="reviewTitle"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reviewTitle">Review</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="submitForm" action="#">
                                <div class="form-row">
                                    <div class="col-5">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName"
                                               placeholder="First Name">
                                    </div>
                                    <div class="col-5">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="stars">Stars</label>
                                    <select class="form-control" id="stars">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="reviewText">Review</label>
                                    <textarea class="form-control" id="reviewText" rows="3"></textarea>
                                </div>
                                <div class="float-right">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button data-dismiss="modal" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center m-4">
                <div class="col-sm-2">
                    <div class="card bg-light img-fluid">
                        <img src="Images/Mike_Wazowski.jpg" class="card-img-top">
                        <p class="text-center text-dark m-0">Mike W.</p>
                    </div>
                </div>
                <div class="col-sm-9 info-bg">
                    <p class="card-body font-weight-normal text-center m-2">My friend Sully is a great scarer! It's been
                        my dream to scare him
                        one day. Just to see if I could and how he looks when he is scared. So I bought one of these
                        waving inflatables and I scared
                        him so bad! Would buy again!</p>
                    <div class="text-center bg-dark text-white pr-2 review-text-bottom">
                        <h6 class="m-0">Rating:
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center m-4">
                <div class="col-sm-2">
                    <div class="card bg-light img-fluid">
                        <img src="Images/Michael_Scott_with_scarf.jpg" class="card-img-top">
                        <p class="card-text text-center text-dark m-0">Prison Mike</p>
                    </div>
                </div>
                <div class="col-sm-9 info-bg">
                    <p class="card-body font-weight-normal text-center m-2">Yeah I might have kidnapped the President's
                        son
                        for ransom but I never got caught neither. I stole a wacky waving man from Wacky Wave so I could
                        make
                        Scranton the best branch EVER, but the stupid popo caught me. Besides jail, 10/10 would steal
                        again.
                    </p>
                    <div class="text-center bg-dark text-white pr-2 review-text-bottom">
                        <h6 class="m-0">Rating:
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="row m-4 justify-content-center">
                <div class="col-sm-2 m-2">
                    <div class="card bg-light img-fluid">
                        <img src="Images/steve1.jpeg" class="card-img-top">
                        <p class="text-center text-dark m-0">Steve Buscemi</p>
                    </div>
                </div>
                <div class="col-sm-9 info-bg">
                    <p class="card-body font-weight-normal text-center m-2">These things ROCK! Nicest salesman I've ever
                        met. They were
                        friendly and helpful! They were so good, I spent $150,000 on these crazy things. Now,
                        it's a constant party at my house and I don't feel so alone.
                    </p>
                    <div class="text-center bg-dark text-white pr-2 review-text-bottom">
                        <h6 class="m-0">Rating:
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center m-4">
                <div class="col-sm-2">
                    <div class="card bg-light img-fluid">
                        <img src="Images/sully.jpeg" class="card-img-top">
                        <p class="text-center text-dark m-0">Sully</p>
                    </div>
                </div>
                <div class="col-sm-9 info-bg">
                    <p class="card-body font-weight-normal text-center m-2">These are the worst invention ever. Didn't
                        buy one,
                        but my friend Mike bought one and scared me so bad. I almost peed myself! Oh sure, he got a
                        laugh out of it
                        but at what expense? Thing doesn't even look like a real monster. It's some weird knock off and
                        insulting to
                        my profession. Disgraceful! 1 star, def do not suggest getting one.</p>
                    <div class="text-center bg-dark text-white pr-2 review-text-bottom">
                        <h6 class="m-0">Rating:
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </h6>
                    </div>
                </div>
            </div>
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