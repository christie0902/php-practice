<?php
class Dice {
    public $sides;

    public function __construct($sides = 6) {
        $this->sides = $sides;
    }

    public function roll() {
        return rand(1, $this->sides);
    }

    public function getSides() {
        return $this->sides;
    }

    public function setSides($sides) {
        $this->sides = $sides;
    }
}