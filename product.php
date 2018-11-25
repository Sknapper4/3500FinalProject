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
<body>

                <?php   /* you will need to replace this hard-coded data with appropriate PHP */
                include "data.php";
                $id = $_GET['id'];
                $instance = $items[$id];
                echo '<div class="">
                         <img src="'.$instance["pic"].'" class="col-6 m-5">
                      </div>
                      <div class="col-6">
                        Hey
                       </div>';
                ?>


</body>
</html>

