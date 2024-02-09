<?php
var_dump($_GET);
var_dump($_POST);

if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
} else {
    $filter = null;
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling requests</title>
</head>
<body>
    <h1>Handling requests</h1>

    <a href="?page=home">HOME</a>
    <a href="?page=about">ABOUT</a>
</body>
</html>