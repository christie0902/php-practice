<?php
require_once 'bootstrap.php';
DB::connect('localhost', 'games', 'root', '');

$query = "SELECT *
FROM `games`";

$games = DB::select($query, [], '') ;

$sort_by = $_GET['sortby'] ?? 'name';
$sort_way = $_GET['sortway'] ?? 'asc';

try{
    $games = sortGames($games, $sort_by, $sort_way);

} catch(\InvalidArgumentException $e){
    
    echo $e;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting games</title>
</head>
<body>
    <h1>SORTING OPTIONS</h1>
    <a href="?sortby=name&sortway=asc" style='color:purple'>Sort by names A-Z</a><br>
    <a href="?sortby=name&sortway=desc" style='color:purple'>Sort by names Z-A</a><br>
    <a href="?sortby=rating&sortway=desc" style='color:green'>Sort by rating from the higest</a><br>
    <a href="?sortby=rating&sortway=asc" style='color:green'>Sort by rating from the lowest</a><br>

    <h1>GAME LIST</h1>
    <?php foreach($games as $i=>$game) : ?>
        <div>
                <h3>Game No.<?=$i+1?></br></h3>
                <?="Game title: $game->name</br>Rating: {$game->rating}"?> 
        </div>
    <?php endforeach ?>
</body>
</html>