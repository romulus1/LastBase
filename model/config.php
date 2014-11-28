<?php
    require_once(__DIR__ . "/Database.php");
    session_start();
    
    $path = "/base/"; //adds variable to make path to base
 
    $host = "localhost"; //uses name localhost to create the server
    $username = "root"; //
    $password = "root";
    $database = "blog_db";

    if(!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }