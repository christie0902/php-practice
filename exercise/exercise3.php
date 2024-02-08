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


/// merge arrays with the same key
$movie_names = [
    'tt0468569' => 'Dark Knight', 
    'tt0050083' => '12 angry men', 
    'tt0108052' => 'Schindler\'s list',
    'tt0110912' => 'Pulp fiction',
    'tt0167260' => 'Lord of the Rings: Return of the King',
    'tt0111161' => 'The Shawshank redemption',
    'tt0071562' => 'The Godfather II',
    'tt0060196' => 'The good, the bad and the ugly',
    'tt0137523' => 'Fight club',
    'tt0068646' => 'The Godfather',
  ];
  $movie_ratings = [
    'tt0111161' => 9.2,
    'tt0068646' => 9.2,
    'tt0071562' => 9.0,
    'tt0468569' => 8.9, 
    'tt0050083' => 8.9, 
    'tt0108052' => 8.9,
    'tt0110912' => 8.9,
    'tt0167260' => 8.9,
    'tt0060196' => 8.9,
    'tt0137523' => 8.8
  ];

$mergedArr = [];
foreach ($movie_names as $movieID => $name) {
    echo "<li style='color: green'>The movie $name has the rating of $movie_ratings[$movieID]</li>";
    $mergedArr[$name] = $movie_ratings[$movieID];
}
echo "<pre>";
var_dump($mergedArr);
asort($mergedArr);

echo '<h1>Sorted by lowest review:</h1>';

foreach ($mergedArr as $name => $rating) {
    echo "<li>$name - Rating: $rating</li>";
}

echo '<h1>Sorted by highest review:</h1>';

arsort($mergedArr);

foreach ($mergedArr as $name => $rating) {
    echo "<li>$name - Rating: $rating</li>";
}