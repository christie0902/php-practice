<?php

$data = [
    'fact' => "In Holland’s embassy in Moscow, Russia, the staff noticed that the two Siamese cats kept meowing and clawing at the walls of the building. Their owners finally investigated, thinking they would find mice. Instead, they discovered microphones hidden by Russian spies. The cats heard the microphones when they turned on.",
    'length' => 318
];

//send Json header. if not, it's gonna be text html
// header('Content-Type: application/json');

// //encode
// echo json_encode($data);

require_once 'views/helper.php';
include 'views/include.php';

?>
