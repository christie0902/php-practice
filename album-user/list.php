<?php
require_once 'bootstrap.php';

$albums = select(null,null, 'Album');
?>
<h1>LIST OF ALBUMS AAA</h1>
<ul>
    <!-- Display success message -->
     <?php if (session()->get('success_message')) : ?>
        <div class="success-message">
            <?= session()->get('success_message') ?>
        </div>
    <?php endif; ?>

    <?php foreach($albums as $album) : ?>
    <li>Title: <?=$album->title?><br>
        Artist: <?=$album->artist?><br>
        Year: <?=$album->release_year?><br>
        Length: <?=$album->length?><br>
    </li>
    <a href="edit.php?id=<?= $album->id ?>">Edit</a>
    <?php endforeach ?>
    <br><br>
    <a href="edit.php">Add new</a>
</ul>