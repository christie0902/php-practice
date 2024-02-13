<?php

require_once 'DBBlackbox.php';
require_once 'Comment.php';


$valid = true;
$errors=[];

if (!empty($_POST)) {
    if (empty($_POST['nickname']))
    {
        $valid = false;
        $errors[] = 'Nickname is a required field';
        echo 'debug01';
    }

    if (empty($_POST['text']))
    {
        $valid = false;
        $errors[] = 'Comment is a required field';
        echo 'debug02';
    }
    $comment = new Comment;
    $comment->nickname = $_POST['nickname'] ?? $comment->nickname;
    $comment->text = $_POST['text'] ?? $comment->text;

    $id=insert($comment);
    header('location: index.php');
}

if (!$valid) {
$_SESSION['errors'] = $errors;
$_SESSION['request_data']= $_POST;
header('location: index.php');
echo 'debug03';
exit();
}



