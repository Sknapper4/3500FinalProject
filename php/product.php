<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">


</head>
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand text-white" href="#">Name of Furniture Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end font-weight-bold" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white nav-item" href="../index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link bg-transparent text-white" href="catalog.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link bg-transparent text-white" href="../login.html">Login</a>
                    </li>
                </ul>
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



                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
