<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Country.php';

DB::connect('localhost', 'world', 'root', '');

$query = "SELECT * FROM `countries` WHERE `population` > 20000000 ORDER BY `population` ASC
LIMIT 10";
$result = DB::select($query , [], 'Country');


?>

<ul>
    <?php foreach($result as $country) :?>
    <li>
        <?= $country->name ?>
        (population <?=$country->formatPopulation ()?>)
        Capital: <?=$country->getCapitalCity ()->name ?>
    </li>
    <?php endforeach ?>
</ul>