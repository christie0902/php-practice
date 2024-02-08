<?php
function element($element, $innerhtml='',$attributes='') 
{
    echo "<$element $attributes>$innerhtml</$element>";
}
element('p', 'some text', 'class="foo"');

$unitToLb = 2.20462262;

function convert_weight($value,$unit ='kg')
{
    global $unitToLb;
    if ($unit == 'kg')
    return "<p>Your weight is " . ($value * $unitToLb) . "lbs</p>";
    elseif ($unit == "lb")
    return "<p>Your weight is " . ($value / $unitToLb) . "kg</p>";
}
echo convert_weight(1, 'lb');
echo convert_weight(1, 'kg');
echo convert_weight(1);

$cars_i_want = [];
$cars_i_want[]= "Aston Martin";
$cars_i_want[]= "Bugatti";
$cars_i_want[]= "Ferrari";
$cars_i_want[]= "Lamborghini";
$cars_i_want[]= "Maserati";
$cars_i_want[]= "Mercedes";
$cars_i_want[]= "Porsche";
$cars_i_want[]= "Skoda";

echo "<pre>"; //format the result
var_dump($cars_i_want);

echo "For myself I would buy $cars_i_want[1].<br>";
echo "For myself I would buy $cars_i_want[3].<br>";

$cars_i_want[4]="Smart";
echo "Each of my kids will get a $cars_i_want[4].<br>";

//foreach loop
foreach($cars_i_want as $value) {
    echo "<li>$value</li>";
}

//Associative arrays
$car_prices = [
    'Skoda Octavia' => 270000,
    'Volkswagen Golf' => 170000,
    'BMW X6' => 380000,
    'Porsche 911' => 1150000
];
echo "You can have a Porsche for just {$car_prices['Porsche 911']} CZK.";

foreach($car_prices as $key => $value) {
echo "The price of {$key} is {$value}CZK.<br>";
}

// ARRAYS 2
$students =[];
$students[] = 'Thomas';
$students[] = 'Kathy';
$students[] = 'Eve';
$students[] = 'Bernard';

echo "<pre>"; //format the result
var_dump($students);

foreach ($students as $value) {
    echo "<h3 style='color:red'>$value</h3>";
}


$divisible_by_seven=[];
for ($i = 0; $i <= 100; $i++) {
    if ($i % 7 === 0)
    $divisible_by_seven[]="$i";
};

echo "<pre>";
var_dump($divisible_by_seven);

foreach ($divisible_by_seven as $value) {
    echo "This number is divisible by 7: <h2 style='color:blue'>$value</h2>";
}

$cast_crew=[];
$cast_crew['cast'] = [];

$cast_crew['cast'][] = 'John David Washington';
$cast_crew['cast'][] = 'Robert Pattinson';
$cast_crew['cast'][] = 'Elizabeth Debicki';
$cast_crew['cast'][] = 'Christopher Nolan';


foreach ($cast_crew['cast'] as $value) {
    echo "<h3>$value</h3>";
}

foreach ($cast_crew as $value) {
    foreach ($value as $value1) {
        echo "<h4 style='color:yellow'>$value1</h4>";
    };
}

?>

