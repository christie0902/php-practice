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

if (isset($_SESSION['success_message'])) {
    $success_mess = $_SESSION['success_message'];
    //remove from the session
    unset($_SESSION['success_message']);
}

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
<!-- Print success message -->
<?php if (!empty($errors)) :?>
    <div class="error-message">
    Validation failed. Please check your data and re-submit the form.
    </div>  
    <?php foreach ($errors as $error) : ?>
        <?=$error ?>
    <?php endforeach?>
<?php endif ?> <br>


<?php if (isset($success_mess)) : ?>
 <div class="success-message"><?= $success_mess ?></div>
<?php endif; ?>

<form action="update.php?id=<?=$song->id?>" method="post">

<input type="hidden" name="id" value="<?= $song->id?>">

 Name:<br>
 <input type="text" name="name" value="<?= $request_data['name'] ?? htmlspecialchars((string)$song->name) ?>"><br>
 <br>

 Author:<br>
 <input type="text" name="author" value="<?= $request_data['author'] ?? htmlspecialchars((string)$song->author) ?>"><br>
 <br>

 Length:<br>
 <input type="number" name="length" value="<?= $request_data['length'] ?? htmlspecialchars((string)$song->length) ?>"> seconds<br>
 <br>

 Album:<br>
 <input type="text" name="album" value="<?= $request_data['album'] ?? htmlspecialchars((string)$song->album) ?>"><br>
 <br>

 <button type="submit">Submit</button>

</form>
</body>
</html>