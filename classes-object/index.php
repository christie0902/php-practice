<?php
require_once 'Author.php';
require_once 'Song.php';
require_once 'Album.php';


$author = new Author;
$song1 = new Song(22, 2003, 3);
$song2 = new Song('Love Story', 2000, 3);
$song3 = new Song('Bad Blood', 2013, 2);
$song4 = new Song('Blank Space', 2018, 3);

$author->name = 'Taylor Swift';
$author->picture = 'https://static01.nyt.com/images/2022/10/24/arts/24taylor-notebook3/24taylor-notebook3-superJumbo.jpg';
$author->biography = 'Taylor Alison Swift (born December 13, 1989) is an American singer-songwriter. Her versatile artistry, songwriting, and entrepreneurship have vastly influenced the music industry and popular culture, and her life is a subject of widespread media coverage. Swift is also a philanthropist and an advocate for artists rights and women empowerment.';

$songs = [$song1,$song2,$song3,$song4];
$album = new Album;
$album->title = "Best Playlist of All time";
$album->songs = $songs;
$album->year = 2023;

include 'view.php';
?>