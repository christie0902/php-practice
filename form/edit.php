<?php
require_once 'DBBlackbox.php';
require_once 'Song.php';

$id = $_GET['id'] ?? null;
//handle error
if(!$id) {
   die('This page must be opened with id=X in the URL');
}

$song = find($id,'Song');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="update.php?id=<?=$song->id?>" method="post">

<input type="hidden" name="id" value="<?= $song->id?>">

 Name:<br>
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