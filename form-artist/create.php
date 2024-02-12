<?php
require_once 'DBBlackbox.php';
require_once 'Artist.php';

$artist = new Artist;
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
</body>
</html>