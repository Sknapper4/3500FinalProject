<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">


</head>
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-white" href="index.html">Name of Furniture Store</a>

            <div class="collapse navbar-collapse justify-content-end font-weight-bold" id="navbarToggler">
                <div class="navbar-nav nav-tabs bg-transparent border-bottom-0">
                    <a class="nav-item nav-link active bg-transparent border-0 text-white" href="index.html">Home <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link bg-transparent text-white " href="catalog.php">Shop</a>
                    <a class="nav-item nav-link bg-transparent text-white" href="login.html">Login</a>
                </div>
            </div>
        </nav>
    </div>
</header>
<body class="">
<main class="">
    <div class="row origin-bg">
        <div class="col-2">
        <div class="card p-0 m-2 mt-2">
            <div class= "card-header bg-secondary text-white text-center">Type</div>
            <ul class="list-inline">
                <li class="p-2 ml-0 text-center">
                    <a href="catalog.php?type=Recliner" class="text-dark">Recliners</a>
                </li>
                <li class="p-2 text-center">
                    <a class="text-dark" href="catalog.php?type=Couch">Couches</a>
                </li>
                <li class="p-2 text-center">
                    <a class="text-dark" href="catalog.php?type=Table">Tables</a>
                </li>
                <li class="p-2 text-center">
                    <a class="text-dark" href="catalog.php?type=Mattress">Mattresses</a>
                </li>
                <li class="p-2 text-center">
                    <a class="text-dark" href="catalog.php">All</a>
                </li>
            </ul>
        </div>
        </div>
        <div class="col-10 pre-scrollable">

            <?php
            include 'data.php';
            if (isset($_GET['type'])){
                $type = $_GET['type'];
                foreach ($items as $val) {
                    if ($val["type"] == $type) {
                        echo '<div class="row bg-white mt-2 rounded border border-info">
                <div class="col-2">
                    <img src="' . $val["pic"] . '" height=150>
                </div>
                <div class="col-8 bg-light">
                    <a href="product.php?id=' . $val["id"] . '"><strong>' . $val["title"] . '</strong></a><br><small>' . $val["company"] . '</small>
                    <div class="mt-2">
                        ' . $val["description"] . '
                    </div>
                </div>
                <div class="col-2 bg-light text-right">
                    <div>
                        In Stock: ' . $val["stock"] . '
                    </div>
                    <div class="mt-3">
                        <strong>&curren;' . $val["price"] . '</strong>
                    </div>
                </div>
            </div>';
                    }
                }
            }
            else{
                foreach ($items as $val) {
                    echo '<div class="row bg-white mt-2 rounded border border-info">
                <div class="col-2">
                    <img src="'.$val["pic"].'" height=150>
                </div>
                <div class="col-8 bg-light">
                    <a href="product.php?id='.$val["id"].'"><strong>'.$val["title"].'</strong></a><br><small>'.$val["company"].'</small>
                    <div class="mt-2">
                        '.$val["description"].'
                    </div>
                </div>
                <div class="col-2 bg-light text-right">
                    <div>
                        In Stock: '. $val["stock"].'
                    </div>
                    <div class="mt-3">
                        <strong>&curren;'. $val["price"].'</strong>
                    </div>
                </div>
            </div>';
                }
            }
            ?>


        </div>
    </div>



</main>

</body>
</html>
