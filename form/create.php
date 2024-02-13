<?php
session_start();
require_once 'DBBlackbox.php';
require_once 'Song.php';

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}

if (isset($_SESSION['request_data'])) {
    //conclude the flashing of request_data
    $request_data = $_SESSION['request_data'];
    unset($_SESSION['request_data']);
}

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
<?php if (!empty($errors)) :?>
    <div class="error-message">
    Validation failed. Please check your data and re-submit the form.
    </div>  
    <?php foreach ($errors as $error) : ?>
        <?=$error ?>
    <?php endforeach?>
<?php endif ?> <br>

<a href="list.php">Back to list</a>
<form action="insert.php" method="post">

 <!-- display the form prefilled with entity data -->

 Name:<br>
 <!-- htmlspecialchars to avoid hackers, make special characters into string, can also use __($song->name) -->
 <input type="text" name="name" value="<?= $request_data['name'] ?? htmlspecialchars((string)$song->name) ?>"><br>
 <br>

 Author:<br>
 <input type="text" name="author" value="<?= $request_data['author'] ?? htmlspecialchars((string)$song->author) ?>"><br>
 <br>

 Length:<br>
 <input type="number" name="length" value="<?= $request_data['length'] ?? htmlspecialchars((string)$song->length) ?>"> seconds<br>
 <br>

 Album:<br>
 <input type="text" name="album" value="<?= $request_data['album'] ??  htmlspecialchars((string)$song->album) ?>"><br>
 <br>

 <button type="submit">Submit</button>
 <input type="reset" value="Clear">

</form>
</body>
</html>