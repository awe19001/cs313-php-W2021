<?php

if (!isset($_GET['course_id']))
{
    die("Error, course id not specified...");
}
$course_id = htmlspecialchars($_GET['course_id']);

require('dbConnect.php');
$db = get_db();

// From the reading wk05
$stmt = $db->prepare('SELECT c.code, c.name, n.content FROM note n JOIN course c ON n.course_id = c.id WHERE c.id =:id');
$stmt->bindValue(':id', $course_id, PDO::PARAM_INT);
$stmt->execute();
$note_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$course_code = $notes_rows[0]['code'];
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

<h1> Courses Notes for <?php echo $course_code; ?> </h1>
<?php
foreach ($note_rows as $note_row)
{
    $content = $note_row['content'];
    echo "<p>$content</p>";
}

?>

<p>abcessdffsdaf</p>
<p>abcessdffsdaf</p>
<p>abcessdffsdaf</p>
<p>abcessdffsdaf</p>
<p>abcessdffsdaf</p>




</body>
</html>