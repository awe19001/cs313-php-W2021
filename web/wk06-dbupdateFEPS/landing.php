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
    <title>Landing Page</title>
</head>
<body>
    <h1> What do you want to do?</h1>

    <ul>

<?php

foreach ($landings as $landing)
{
    $id = $landing['id'];
    $code = $landing['code'];
    $name = $landing['name'];

    echo "<li><p>$code - $name</p></li>";

}
?>
 </ul>
    
</body>
</html>