<?php

$movies = [
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
];

// foreach ($movies as $movie) {
//     echo "<li>$movie</li>";
// }

for($i=0;$i<count($movies);$i++){
    echo "<li>{$movies[$i]}</li>";
}

sort($movies);
echo "<pre>";
var_dump($movies);
