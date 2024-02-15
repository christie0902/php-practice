<?php
require_once 'Celebrity.php';
require_once 'lib/DB/DB.php';
require_once 'lib/DB/DB_functions.php';


DB::connect('localhost', 'celebrity', 'root', '');


$query = "SELECT `id`
FROM `standings`
WHERE `year` = '2009'
ORDER BY `wealth` DESC
LIMIT 10";

$arrayOfIds = [];
$Ids = DB::select($query, [], '') ;

$arrayOfIds = array_map(function($Id) {
    return $Id->id;
},$Ids);

// implode - split elements of an array in to strings by seperator ,
$stringOfIds = implode(",", $arrayOfIds);
$query2 = "
SELECT *
FROM `celebrities`
WHERE `id` IN ($stringOfIds)";

$chart2009 = DB::select($query2, [], 'Celebrity');


// Create API endpoint for TOP 10 richest in 2009
header('Content-Type: application/json');
echo json_encode($chart2009);

// API link: http://www.cbp-exercises.test/celebrity/API/