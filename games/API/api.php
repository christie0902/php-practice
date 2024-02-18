<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
require_once 'bootstrap.php';

DB::connect('localhost', 'games', 'root', '');

$query = "SELECT *
FROM `games`";

$games = DB::select($query, [], '') ;

header('Content-Type: application/json');
echo json_encode($games);
exit;