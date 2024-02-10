<?php
$my_name="XT";
$height = 1.6;
$inches=12;

function inchesToCentimeters($valueInInches) {
    $valueInCm = $valueInInches*2.54;
    echo $valueInCm;
}

inchesToCentimeters(20);
?>
<h3>NEXT EXERCISE</h3>
<?php
$number = 42;
function evenOrOdd($number) {
    return $number % 2 == 0 ? 'This is an even number' : 'This is an odd number';
}

echo evenOrOdd($number);