<?php

require_once 'DBBlackbox.php';

// var_dump($_POST);
// die();

$review = [
    'movie' => $_POST['movie'] ?? null,
    'text' => $_POST['text'] ?? null,
    'rating' => $_POST['rating'] ?? null
];
$id = insert($review);

echo 'New movie added with the id: ' . $id;