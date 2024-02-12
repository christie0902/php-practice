<?php
require_once 'DBBlackbox.php';
require_once 'Artist.php';

$artist = new Artist;

$artist->first_name = $_POST['firstName'] ?? $first_name;
$artist->last_name = $_POST['lastName'] ?? $last_name;
$artist->year_of_birth = $_POST['yearOfBirth'] ?? $year_of_birth;
$artist->genre = $_POST['genre'] ?? $genre;

$id = insert($artist);
echo 'You have added ' . $artist->first_name . 'with the ID ' . $id;