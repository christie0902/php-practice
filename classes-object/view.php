<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?=$author->name?></h1>
    <img src="<?=$author->picture?>" alt="photo">
    <p><?=$author->biography?></p>

    <h3><?=$album->title?></h3>
    <h4>Year: <?=$album->year?></h4>
    <ul>
        <?php $totalPlayTime = 0; ?>
        <?php foreach($album->songs as $song) :?>
        <li>
            Title: <?=$song->title?> - <?=$song->release_year?>;
            <?php $totalPlayTime += $song->length; ?>
        </li>
        <?php endforeach ?>
        <h4>Play time: <?=$totalPlayTime?></h4>
    </ul>
</body>