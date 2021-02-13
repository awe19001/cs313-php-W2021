<?php

if (!isset($_GET['family_id']))
{
    die("Error, family id not specified...");
}
$family_id = htmlspecialchars($_GET['family_id']);

require('dbconnect.php');
$db = get_db();

$stmt = $db->prepare('SELECT l.code, l.name, n.content FROM notenewfamily n JOIN landing l ON n.family_id = l.id WHERE l.id = :id');
$stmt->bindValue(':id', $family_id, PDO::PARAM_INT);
$stmt->execute();
$notenewfamily_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$family_code = $notenewfamily_rows[0]['code'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="familynotes.css">
    <title>Create Family</title>
</head>
<body>


<div class="container" style="width: 500px; height: 500px; border: 2px solid red; margin-top: 3px;">
    <h2>Create New <?php echo $family_code; ?> </h2>

<?php
foreach ($notenewfamily_rows as $note_row)
{
    $content = $note_row['content'];
    echo "<p>$content</p>";
}
?>


<p>
	<a href="form.php">Create Here!</a>
</p>




</div>
<br />
    
</body>
</html>