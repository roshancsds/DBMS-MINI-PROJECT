<?php
    ob_start(); // Turns on output buffering

    // Set the default timezone
    $timezone = date_default_timezone_set("Europe/London");

    // Database connection parameters
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "feedback";
    $port = 3307; // Specify the port number

    // Establish a connection to the MySQL database
    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    // Check if the connection was successful
    if(mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    echo '<p style="color: white;">Connection successful!</p>';
?>
