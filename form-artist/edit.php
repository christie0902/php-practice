<?php
require_once 'DBBlackbox.php';
require_once 'Artist.php';

$id = $_GET['id'];
if (!$id) {
    die('This page require id in the URL');
}
$artist = find($id, 'Artist');
?>
<a href="list.php">Back to list</a>
<form action="update.php?id=<?=$artist->id?>" method="post">

    <input type="hidden" name="id" value="<?=$artist->id?>">
    <label for="firstName">First Name</label></br>
    <input type="text" name="firstName" id="firstName" value="<?=htmlspecialchars((string)$artist->first_name)?>"></br>
    </br>

    <label for="lastName">Last Name</label></br>
    <input type="text" name="lastName" id="lastName" value="<?=htmlspecialchars((string)$artist->last_name)?>"></br>
    </br>

    <label for="yearOfBirth">Year of birth</label></br>
    <input type="text" name="yearOfBirth" id="yearOfBirth" value="<?=htmlspecialchars((string)$artist->year_of_birth)?>"></br>
    </br>

    <label for="genre">Genre</label></br>
    <input type="text" name="genre" id="genre" value="<?=htmlspecialchars((string)$artist->genre)?>"></br>
    </br>

    <button>Submit</button>

    </form>