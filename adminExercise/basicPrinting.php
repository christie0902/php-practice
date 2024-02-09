<?php
$title = 'Inline PHP practice';
$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];
$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- exercise 1 -->
    <title><?=$title?></title>
    <h1><?=$title?></h1>

    <!-- exercise 2 -->
    <?php foreach ($vehicles as $vehicle => $speed) : ?>
    <table>
    <tr>
        <th>Means of transport</th>
        <th>Max. speed (km/h)</th>
    <tr>
    <tr>
        <td><?=$vehicle?></td>
        <td><?=$speed?></td>
    </tr>

    <?php endforeach; ?>

    <!-- exercise 3 -->
    <?php if (!empty($messages)) : ?>
        <ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">
            <?php foreach($messages as $message) : ?>
                <li><?=$message?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</table>
</body>
</html>