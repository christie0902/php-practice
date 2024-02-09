<?php

var_dump($_GET);
var_dump($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
         <input type="text" name="subject" value=""><br><br>
         <textarea name="text"cols="30" rows="10"></textarea>
         <input type="submit" value="submit with POST">
    </form>
</body>
</html>