<?php 

$book = filter_var($_POST['book'], FILTER_SANITIZE_STRING);
$chapter = filter_var($_POST['chapter'], FILTER_SANITIZE_NUMBER_INT);
$verse = filter_var($_POST['verse'], FILTER_SANITIZE_NUMBER_INT);



?>

<?php
//Search for all the books in the DB

?>