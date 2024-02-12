<?php
$page_title='Shopping list';
$page = null;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
$items = [];
if (!empty($_POST['items'])) {
    $items = $_POST['items'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="?page=home">Home</a>
    <a href="?page=form">Form</a>
    <h1><?=$page_title?></h1>
    <?php if ($page == 'home') :?>
        <?php include 'home.php' ?>
    <?php endif ?>
    <?php if ($page == 'form') :?>
        <?php include 'form.php' ?>
    <?php endif ?>
    <nav>
   
</nav>
</body>
</html>