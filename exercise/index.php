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

echo "<pre>";
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

?>