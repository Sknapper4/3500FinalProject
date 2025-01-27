<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect("sql105.epizy.com", "epiz_23073061",
    "finalproject", "epiz_23073061_FinalProject");

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password']);
    $password_2 = mysqli_real_escape_string($db, $_POST['confirmPassword']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}


if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

if(isset($_POST['Add'])) {
    $target = "Images/";
    $target = $target . basename( $_FILES['photo']['name']);

    $pic=($_FILES['photo']['name']);

    $query = "INSERT INTO users (photo) 
  			  VALUES('$pic')";
    mysqli_query($db, $query);

    if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)) {
        echo "The file ". basename( $_FILES['uploadedfile']
            ['name']). " has been uploaded, and your information has been added to the directory";
    } else {
        echo "Sorry, there was a problem uploading your file.";
    }
}

if(isset($_POST['remove'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);

    $user_check_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user) {
        $sql = "DELETE FROM users WHERE username='$username'";
    } else {
        echo "HELLO";
    }

    $sql = "DELETE FROM users WHERE username='$username'";

    if ($db->query($sql) === TRUE) {
        header('location: catalog.php?logout="1"');
    } else {
        echo "Error deleting record: " . $db->error;
    }
}

?>