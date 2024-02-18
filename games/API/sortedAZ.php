<?php
require_once '../bootstrap.php';

DB::connect('localhost', 'games', 'root', '');

$query = "SELECT *
FROM `games`";

$games = DB::select($query, [], '') ;
$sortAtoZ = sortGames($games, 'name', 'asc');
header('Content-Type: application/json');
echo json_encode($sortAtoZ);