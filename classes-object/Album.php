<?php
class Album {
    public $title = null;
    public $songs = null;
    public $year = null;

    public function calculateLength() {
        $totalPlayTime = 0;
        foreach ($this->songs as $song) {
            $totalPlayTime += $song->length;
        }
        return $totalPlayTime;
    }
}