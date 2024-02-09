<?php
require 'data.php';
require_once 'function.php';

$sort_by = $_GET['sortby'] ?? 'title'; //add default value to remove if condition
$sort_way = $_GET['sortway'] ?? 'asc';

$movies = sortMovies($movies, $sort_by, $sort_way);

// if ($sort_by !== null && $sort_way !== null) {
//     $movies = sortMovies($movies, $sort_by, $sort_way);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Sort</title>
</head>
<body>
    <a href="?sortby=title&sortway=asc" style='color:purple'>Sort by title A-Z</a><br>
    <a href="?sortby=title&sortway=desc" style='color:purple'>Sort by title Z-A</a><br>
    <a href="?sortby=rating&sortway=desc" style='color:green'>Sort by rating from the higest</a><br>
    <a href="?sortby=rating&sortway=asc" style='color:green'>Sort by rating from the lowest</a><br>
    <a href="?sortby=year&sortway=desc" style='color:red'>Sort by year from the newest</a><br>
    <a href="?sortby=year&sortway=asc" style='color:red'>Sort by year from the oldest</a><br>

    

    <?php foreach($movies as $movie) : ?>
        <div>
            <li>
                <?="Title: {$movie['title']}</br>Rating: {$movie['rating']}</br>Year: {$movie['year']}</br>"?> 
            </li>
        </div>
    <?php endforeach ?>


</body>
</html>