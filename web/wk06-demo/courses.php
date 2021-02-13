<?php
require('dbConnect.php');
$db = get_db();
// SELECT id, code, name FROM course;
// From the reading wk05
//$stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
//$stmt->bindValue(':id', $id, PDO::PARAM_INT);
//$stmt->bindValue(':name', $name, PDO::PARAM_STR);
//$stmt->execute();
//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$query = 'SELECT id, code, name FROM course';
$stmt = $db->prepare($query);
$stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>

<body>

<h1> Courses </h1>

<ul>



<?php
foreach ($courses as $course)
{

    //var_dump($courses); help debug if it will not show in heroku
    $id = $course['id'];
    $code = $course['code'];
    $name = $course['name'];

    echo "<li><p>$code - $name</p></li>";
}

?>

</ul>

    
</body>
</html>