<?php

//connect mysql
try {
    // Set Database Credentials
    $dbHost = 'ec2-34-192-72-159.compute-1.amazonaws.com';
    $dbName = 'd7a3jfu7vso8bu';
    $dbUser = 'ekemdhtwjhvcnz';
    $dbPassword = '712b50f2ad63bd3e6bbd75a6322fd274fc6a84dd24d7525965a9e39da88a4bfb';
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