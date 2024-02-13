<?php
require_once 'bootstrap.php';

$id = $_GET['id'] ?? null;
if ($id) {
    $album = find($id, 'Album');
} else {
    $album = new Album;
}

$valid = true;
$errors = [];

if (empty($_POST['title'])) {
    $valid = false;
    $errors[] = 'Title is a required field.';
}

if (empty($_POST['artist'])) {
    $valid = false;
    $errors[] = 'Artist is a required field.';
}

if ((!is_numeric($_POST['release_year']))) {
    $valid = false;
    $errors[] = 'Year needs to be a number';
}

if ((!is_numeric($_POST['length']))) {
    $valid = false;
    $errors[] = 'Length needs to be a number';
}

if (!$valid) {
    session()->flash('errors', $errors);
    session()->flashRequest();
    if ($id) {
        header('Location: edit.php?id=' .$id);
    }else {
        header('Location: edit.php');
        exit();
    }
}

$album->title = $_POST['title'] ?? $album->title;
$album->artist = $_POST['artist'] ?? $album->artist;
$album->length = intval($_POST['length']) ?? $album->length;
$album->release_year = intval($_POST['release_year']) ?? $album->release_year;

if ($id) {
    update($id, $album);
    $_SESSION['success_message'] = 'Album with ID ' . $id . 'successfully updated';
    header('Location: edit.php?id=' .$id);
    exit();
} else {
    $id = insert($album);
    $_SESSION['success_message'] = 'Album inserted with ID ' . $id;
    header('Location: edit.php');
    exit();
}

