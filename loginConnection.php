<?php

$username = "";
$password = "";
$login_attempt = 0;

    //database connection code
    include ("./index/server.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
}

    //check database for the username and
    //password stored from registration page
    $result = mysqli_query($conn,"SELECT * FROM registration_login where username = '$username' and password = '$password'")

        or die("Failed to query database");

    $row = mysqli_fetch_array($result);

    //User Authentication verifies that username and password match the database to allow login
    if ($row ['Username'] == $username && $row ['Password'] == $password){
        $_SESSION['loggedin'] = true;
        $_SESSION['Username'] = $username;
        include_once("Blog Forum.php");
    }
    else{
        $login_attempt++;
        include ("./index/failed_login_attempt.php");
        include ("BlogLoginPage.php");
    }

$conn->close();
