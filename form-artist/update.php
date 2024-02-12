<?php
require_once 'DBBlackbox.php';
require_once 'Artist.php';

$id = $_GET['id'];
if (!$id) {
    die('This page require id in the URL');
}
$artist = find($id, 'Artist');

$artist->first_name = $_POST['firstName'] ?? $artist->first_name;
$artist->last_name = $_POST['lastName'] ?? $artist->$last_name;
$artist->year_of_birth = $_POST['yearOfBirth'] ?? $artist->$year_of_birth;
$artist->genre = $_POST['genre'] ?? $artist->genre;

update($id, $artist);
echo 'The artist has been updated successfully';
?>
