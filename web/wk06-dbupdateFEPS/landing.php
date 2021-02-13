<?php
require('dbconnect.php');
$db = get_db();

//SELECT id, code, name FROM landing;
// From the reading wk05
//$stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
//$stmt->bindValue(':id', $id, PDO::PARAM_INT);
//$stmt->bindValue(':name', $name, PDO::PARAM_STR);
//$stmt->execute();
//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$query = 'SELECT id, code, name FROM landing';
$stmt = $db->prepare($query);
$stmt->execute();
$landings = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="landingstyle.css">
    <title>Landing Page</title>
</head>
<body>
<div class="container" style="width: 50%;
	margin:0px auto;
	padding: 20px;
	border: 2px solid #086ff5;
	background: white;
	border-radius: 0px 0px 10px 10px;">

     <h1> What do you want to do?</h1>

    <ul>

<?php

foreach ($landings as $landing)
{
    $id = $landing['id'];
    $code = $landing['code'];
    $name = $landing['name'];

    echo "<li><p><a href='family_notes.php?family_id=$id'>$code - $name</a></p></li>";

}
?>
 </ul>
 </div>
 
</body>
</html>