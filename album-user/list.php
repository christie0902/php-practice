<?php
require_once 'bootstrap.php';
$albums = select(null,null, 'Album');
?>
<h1>LIST OF ALBUMS</h1>
<ul>
    <?php foreach($albums as $album) : ?>
    <li>Title: <?=$album->title?><br>
        Artist: <?=$album->artist?><br>
        Year: <?=$album->release_year?><br>
        Length: <?=$album->length?><br>
    </li>
    <a href="edit.php?id=<?= $album->id ?>">Edit</a>
    <?php endforeach ?>
</ul>