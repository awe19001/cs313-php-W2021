<?php

if (!isset($_GET['family_id']))
{
    die("Error, family id not specified...");
}
$family_id = htmlspecialchars($_GET['family_id']);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Family</title>
</head>
<body>


<div class="container" style="width: 500px; height: 500px; border: 2px solid red; margin-top: 3px;">
    <h1 class="text-center">Welcome to Family Event Planning System</h1>
    <h2>Create New Family_id <?php echo $family_id ?> </h2>

    <p>abcdefggiw k</p>
    <p>abcdefggiw k</p>
    <p>abcdefggiw k</p>
    <p>abcdefggiw k</p>

</div>
<br />
    
</body>
</html>