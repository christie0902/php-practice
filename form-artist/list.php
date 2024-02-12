<?php
require_once 'DBBlackbox.php';
require_once 'Artist.php';

$artists = select(null, null, 'Artist');

if ($artists === false) {
    echo "Error retrieving artists.";
} else {
?>
    <a href="create.php">Add artist</a>
    <ul>
        <?php foreach($artists as $artist) : ?>
            <li>
                <h3><?= isset($artist->first_name) ? $artist->first_name : "No name" ?></h3>
                <?php if (isset($artist->id)) : ?>
                    <a href="edit.php?id=<?=$artist->id?>">Edit</a>
                <?php else : ?>
                    <span>No ID available</span>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php
}
?>