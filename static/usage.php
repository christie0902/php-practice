<?php

require_once 'Computer.php';

$my_com = new Computer;
$this_com = new Computer;

// $my_com->model ='Lenovo';
// $this_com->model ='Dell';

var_dump(Computer::$latestWindow);
var_dump(Computer::getWindow ());