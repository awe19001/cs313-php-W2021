<?php

$course_id = htmlspecialchars($_POST['course_id']);
$content = htmlspecialchars($_POST['note_content']);

require('dbConnect.php');
$db = get_db();

// From the reading wk05
//query statement
$stmt = $db->prepare('INSERT INTO note(course_id, content) VALUES (:course_id, :content);');
$stmt->bindValue(':id', $course_id, PDO::PARAM_INT);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->execute();

$new_page = "course_notes.php?id=$course_id";

header("Location: $new_page");
die();

?>