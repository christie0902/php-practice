<?php
session_start();
require_once 'DBBlackbox.php';
require_once 'Song.php';

$valid= true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'Name is a required field.';
}

if (empty($_POST['author'])) {
    $valid = false;
    $errors[] = 'Author is a required field.';
}

if (!$valid) {
    $_SESSION['errors'] = $errors;
    $_SESSION['request_data'] = $_POST;
    header('location:create.php');
    exit();
}

$song = new Song;

$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;

$id = insert($song);

//inform the user
$_SESSION['success_message'] = 'Song #' . $id . ' successfully inserted';


//redirect to edit form for this song
header('location: edit.php?id=' . $id);
exit();