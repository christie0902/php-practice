<?php
class Song {
    public ?string $title = null;
    public $release_year = null;
    public ?int $length = null;

    public function __construct($title, $release_year, $length) {
        $this->title = $title;
        $this->release_year = $release_year;
        $this->length = $length;
    }
}