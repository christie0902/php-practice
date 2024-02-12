<?php
require_once 'DBBlackbox.php';
require_once 'Song.php';
$song = new Song;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="list.php">Back to list</a>
<form action="insert.php" method="post">

 <!-- display the form prefilled with entity data -->

 Name:<br>
 <!-- htmlspecialchars to avoid hackers, make special characters into string, can also use __($song->name) -->
 <input type="text" name="name" value="<?= htmlspecialchars((string)$song->name) ?>"><br>
 <br>

 Author:<br>
 <input type="text" name="author" value="<?= htmlspecialchars((string)$song->author) ?>"><br>
 <br>

 Length:<br>
 <input type="number" name="length" value="<?= htmlspecialchars((string)$song->length) ?>"> seconds<br>
 <br>

 Album:<br>
 <input type="text" name="album" value="<?= htmlspecialchars((string)$song->album) ?>"><br>
 <br>

 <button type="submit">Submit</button>

</form>
</body>
</html>