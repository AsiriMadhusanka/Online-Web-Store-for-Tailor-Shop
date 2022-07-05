<?php
    error_reporting(1);
    ini_set('display_errors', 'On');

    $connection = new mysqli('localhost:3308', 'root', '', 'it19785370');
    if ($connection->connect_error) {
        die('Error connecting to database server. '. $conn->connect_error);
    }
?>