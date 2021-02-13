<?php
/*
File: dbconnect.php

Description: Shows how to connect with Heroku credentials.
*/
function get_db() {
    $db = NULL;

    try {
        //default Heroku Postgress configuration URL
        $dbUrl = getenv('DATABASE_URL');

        //Get the various oarts of the DB Connection from the URL
        $dbopts = parse_url($dbUrl);

        $dbHost = $dbopts["host"];
        $dbPort = $dbopts["port"];
        $dbUser = $dbopts["user"];
        $dbPassword = $dbopts["pass"];
        $dbName = ltrim($dbopts["path"], '/');

        //Create the PDO Connection
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
        //this line makes PDO give us an exception when there are problems, and can be
        //very helpful in debugging!
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );   
    
    }
    catch (PDOException $ex) {
        //If theis were in production, you would not want to echo
        //the details of the exception.
        echo "Error connecting to DB. Details: $ex";
        die();
    }
    return $db;
}
?>