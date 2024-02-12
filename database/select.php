<?php
require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';

$tracks = select(null, 1, 'AudioTrack'); //null or number of records to select | 1 is offset from where
var_dump($tracks);