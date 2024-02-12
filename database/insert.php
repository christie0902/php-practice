<?php
//access with POST
require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';

$track = new AudioTrack;
$track1 = new AudioTrack;
$track3 = new AudioTrack;

$id = insert($track);
$id = insert($track1);
$id = insert($track3);

echo 'New track ID:' . $id;