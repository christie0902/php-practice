<?php
$inches=12;
function inchesToCentimeters($numberOfInches)
{
 $result = $numberOfInches * 2.54;
 return $result;
}
//function convert C to F
function celsiusToFahrenheit($temperatureInC)
{
    $temperatureToF = (9/5) * $temperatureInC + 32;
    return $temperatureToF;
}

// check if healthy
$temp=36.5;
function isHealthy($temperature, $unit = 'c')
{
    if ($unit == 'f')
    $temperature = ($temperature-32)/(9/5);
   
    if ($temperature < 37) {
    echo 'you are okay';
    return true;
    }

    else {
    echo 'you have a fever';
    return false;
    }
}

isHealthy(100,'f');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Practice</title>
</head>
<body>
    
</body>
</html>