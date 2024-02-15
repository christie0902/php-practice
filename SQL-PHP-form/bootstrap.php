<?php

require_once 'Country.php';
require_once 'DB/DB.php';
require_once 'DB/DB_functions.php';
require_once 'Session/helpers.php';
require_once 'Session/Session.php';

DB::connect('localhost', 'world', 'root', '');
 
session();