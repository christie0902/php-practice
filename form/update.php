<?php
session_start();
require_once 'DBBlackbox.php';
require_once 'Song.php';

$id= $_GET['id'] ?? null;
if(!$id) {
    die('This page must be opened with id=X in the URL');
}

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
    header('location:edit.php?id=' .$id);
    exit();
}

if (isset($_SESSION['success_message'])) {
    $success_mess = $_SESSION['success_message'];
    //remove from the session
    unset($_SESSION['success_message']);
}





$song = find($id,'Song');

$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;

update($id,$song);

$_SESSION['success_message'] = 'Song #' . $id . 'successfully updated';

header('location: list.php');
exit();