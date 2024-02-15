<?php

require_once 'bootstrap.php';

$query = ' 
SELECT *
FROM `countries`
ORDER BY `name` ASC
LIMIT 30, 20
';
$countries = DB::select($query, [], 'Country');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
</head>
<body>
    <h1>List of Countries</h1>
    <a href="edit.php">ADD COUNTRY</a>
    <table>
        <ul>
            <?php foreach ($countries as $country) :?>
                <li>
                    <h3><?= $country->name ?></h3>
                    Continent: <?=$country->continent?><br>
                    Region: <?=$country->region?><br>
                    Population: <?=$country->formatPopulation ()?><br>
                    <a href="edit.php?id=<?=$country->id?>">Edit</a>
                </li>
            <?php endforeach?>
        </ul>
    </table>
</body>
</html>