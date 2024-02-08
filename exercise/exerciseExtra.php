<?php
$people = [
    [
        'name' => 'John David Washington',
        'job' => 'actor'
    ],
    [
        'name' => 'Robert Pattinson',
        'job' => 'actor'
    ],
    [
        'name' => 'Christopher Nolan',
        'job' => 'director'
    ],
    [
        'name' => 'Steven Spielberg',
        'job' => 'director'
    ],
    [
        'name' => 'Michael Caine',
        'job' => 'actor'
    ]
];
$cast_crew = ['actors' => [], 'directors' => []];

foreach ($people as $array) {
    $job = $array['job'];
    if ($job === "actor")
        $cast_crew['actors'][] = $array['name'];
    elseif ($job === "director")
        $cast_crew['directors'][] = $array['name'];
}

echo "<pre>";
var_dump($cast_crew);


//merging arrays
$default_values=[
    'title' => null,
    'year' => null,
    'plot' => null,
    'duration' => null
];

$movie = [
    'title' => 'Tenet',
    'year' => '2020',
    'plot' => 7.5,
    'duration' => 150
];

$mergedArr = array_merge($default_values,$movie);
echo "<pre>";
var_dump($mergedArr);

//Testing element existence
$movies = [
    [
        'title' => 'Dunkerk',
        'year' => 2017,
        'pg' => 13,
        'favourite' => false
    ],
    [
        'title' => 'Tenet',
        'year' => 2020,
        'pg' => 13
    ],
    [
        'title' => 'Interstellar',
        'year' => 2014,
        'pg' => 13,
        'favourite' => false
    ],
    [
        'title' => 'Inception',
        'year' => 2010,
        'pg' => 13,
        'favourite' => true
    ],
    [
        'title' => 'The Prestige',
        'year' => 2006,
        'pg' => 13
    ],
    [
        'title' => 'Batman begins',
        'year' => 2005,
        'pg' => 12,
        'favourite' => true
    ],
    [
        'title' => 'The Dark Knight',
        'year' => 2008,
        'pg' => 12,
        'favourite' => true
    ],
    [
        'title' => 'The Dark Knight Rises',
        'year' => 2012,
        'pg' => 12,
        'favourite' => false
    ],
];

$favourite_movies=[];

foreach ($movies as $movie) {
    
    if (!empty($movie['favourite']) &&  $movie['favourite'] === true)
    $favourite_movies[]=$movie['title'];
}

echo "<pre>";
var_dump($favourite_movies);