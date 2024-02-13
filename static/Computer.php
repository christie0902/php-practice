<?php

class Computer 
{
    public static $latestWindow = 11;

    public ?string $model = null;
    public ?string $os = null;

    public function setOS ()
    {
        $this->os = '$os';
    }

    public static function getWindow ()
    {
        return static::$latestWindow;
    }
}