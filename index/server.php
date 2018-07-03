<?php
/**
 * This file is meant to server as the connection to a database
 * and to be utilized as an includes file to limit repetitive code
 */

//connect to the server and connect to the database
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "blog_page";

//create a connection to server and check connection
    $conn = new MySqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}