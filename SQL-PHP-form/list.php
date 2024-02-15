<?php

require_once 'bootstrap.php';

$query = ' 
SELECT *
FROM `countries`
ORDER BY `name` ASC
LIMIT 0, 20
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
    <table>
        <ul>
            <?php foreach ($countries as $country) :?>
                <li>
                    <?= $country->name ?><br>
                    Population <?=$country->formatPopulation ()?><br>
                    Capital: <?=$country->getCapitalCity ()->name ?>
                </li>
            <?php endforeach?>
        </ul>
    </table>
</body>
</html>