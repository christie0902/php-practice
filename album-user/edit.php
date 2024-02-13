<?php
require_once 'bootstrap.php';

$message = [];

$id = $_GET['id'] ?? null;
if ($id) {
    $album = find($id, 'Album');
} else {
    $album = new Album;
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
<a href="list.php">Back to LIST</a>
<!-- Display Error Message -->
<?php if (session()->get('errors')) : ?>
    <div class="error-message">
        Validation failed. Please check your data and re-submit the form.
    </div>
    <?php foreach (session()->get('errors') as $error) : ?>
        <div class="error-message">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<!-- Display Success message -->
<?php if (session()->get('success_message')) : ?>
    <div class="success-message">
        <?= session()->get('success_message') ?>
    </div>
<?php endif; ?>

<!-- Display form -->
<?php if ($id) : ?>
    <form action="save.php?id=<?= $id ?>" method="post">
<?php else : ?>
    <form action="save.php" method="post">
<?php endif; ?>

    <label>Title:</label><br>
    <input type="text" name="title" value="<?= htmlspecialchars((string)old('title', $album->title)) ?>">
    <br><br>

    <label>Artist:</label><br>
    <input type="text" name="artist" value="<?= old('artist', $album->artist) ?>">
    <br><br>

    <label>Year of release:</label><br>
    <input type="release_year" name="release_year" value="<?= old('release_year', $album->release_year) ?>">
    <br><br>

    <label>Length:</label><br>
    <input type="text" name="length" value="<?= old('length', $album->length) ?>">
    <br><br>

    <button>Submit</button>
    <input type="reset" value="Clear">

    <button class="empty">Empty form</button>

</body>
</html>
