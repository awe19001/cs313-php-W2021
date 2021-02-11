<?php

//connect heroku
try {
    // Set Database Credentials
    $dbHost = 'localhost';
    $dbName = 'XXXXXXXXXX';
    $dbUser = 'iClient';
    $dbPassword = 'XXXXXXXXXX';
    // Tell PDO to give us exception errors for debugging in needed
    $dbOptions = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    // Create the PDO connection for MySQL
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword, $dbOptions);
    return $db;
} catch(PDOException $e) {
    echo 'Error connecting to DB.';
    echo 'Details: '.$e; #<-------- for debugging only not for production site (remove me)
    exit;
}



?>