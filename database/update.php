<?php
require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';

$track = find(1, 'AudioTrack');

$track->name = 'Imagine';
$track->artist = 'John';

update(1, $track);