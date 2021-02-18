<?php
include "dbconnect.php";
$db = get_db();

if (isset($_POST['submit'])){
    //get variables from the form
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

   $query= "INSERT INTO usertracker (id, firstname, lastname, email, userpassword, gender) VALUES ('$first_name', '$last_name', ' $email', ' $password', '$gender')";
    //execute the query

    $stmt = $db->prepare($query);
    $stmt->execute();
  /*  
    if
        ($stmt ==TRUE) {
            echo "New record created successfully.";
        }else {
            echo "Error:"; 
        }
        die();
        */
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP FORM</title>
</head>
<body>
    
<h2>Signup Form</h2>
<form action="" method="POST">
    <fieldset>  
        <legend>Personal Information:</legend>
    First Name: <br>
    <input type="text" name="firstname">
    <br>
    Last Name: <br>
    <input type="text" name="lastname">
    <br>
    Email: <br>
    <input type="email" name="email">
    <br>
    Password: <br>
    <input type="password" name="password">
    <br>
    Gender: <br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br>    <br>
    <input type="submit" name="submit" value="submit">
    </fieldset>
</form>

</body>
</html>