<?php 
    session_start();
    ob_start(); 
    require('config.php');

    // Fetch email and password from POST request
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to select user with given email and password
    $result_query = mysqli_query($con, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");
    $row = mysqli_fetch_array($result_query);
    $count_query = mysqli_num_rows($result_query);

    // If user exists, set session and redirect to admin page
    if ($count_query != 0) {
        $sessionemail = $row['email'];
        $_SESSION['login_user'] = $sessionemail;
        header("Location: ../adminpage.php");
        exit();
    } 
    // If user does not exist, show an alert and redirect back
    else {
        echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';
    }
?>
