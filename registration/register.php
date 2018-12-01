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

<div class="row justify-content-center mt-5">
    <div class="col-4 card border-1 border-info p-2">
        <h3 class="text-center mt-2 mb-0">Sign Up</h3>
        <form method="post" action="" id="signUp" action="register.php">
            <?php include('errors.php'); ?>
            <div class="row justify-content-between mt-2">
                <div class="input-group col-6">
                    <label for="first_name" class="font-weight-bold">First Name</label>
                    <input type="text" class="form-control border-info required" id="first_name"
                           placeholder="First Name">
                </div>
                <div class="input-group col-6">
                    <label for="last_name" class="font-weight-bold">Last Name</label>
                    <input type="text" class="form-control border-info required" id="last_name"
                           placeholder="Last Name">
                </div>
            </div>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" id="username">
            </div>
            <div class="input-group mt-2">
                <label for="newUserEmail" class="font-weight-bold">Email address</label>
                <input type="email" class="form-control border-info required" id="email"
                       aria-describedby="emailHelp"
                       placeholder="Enter email" value="<?php echo $email; ?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                </small>
            </div>
            <div class="row justify-content-between">
                <div class="input-group col-6">
                    <label for="password" class="font-weight-bold">Password</label>
                    <input type="password" class="form-control border-info required password" id="password"
                           placeholder="Password">
                </div>
                <div class="input-group col-6">
                    <label for="confirmPassword" class="font-weight-bold">Confirm Password</label>
                    <input type="password" class="form-control border-info required password" id="confirmPassword"
                           placeholder="Confirm Password">
                </div>
                <div class="registrationFormAlert ml-3" id="divCheckPasswordMatch">
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

