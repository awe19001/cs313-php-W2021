<?php

if (isset($_GET['course_id']))
{
    die("Error, course id not specified...");
}
$course_id =htmlspecialchars( $_GET['course_id']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Notes</title>
</head>

<body>

<h1> Courses Notes for course id <?php echo $course_id ?> </h1>

<p>abcessdffsdaf</p>
<p>abcessdffsdaf</p>
<p>abcessdffsdaf</p>
<p>abcessdffsdaf</p>
<p>abcessdffsdaf</p>




</body>
</html>