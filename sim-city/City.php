<?php

require_once "DB.php";

class City
{   
    public ?string $name = null;
    public $country_id = null;
    public ?string $district = null;
    public $population = null;

    public function insert()
    {
        DB::insert('
        INSERT INTO `cities`
        (`name`, `country_id`, `district`, `population`)
        VALUES
        (?, ?, ?, ?)
    ', 
    [
        $this->name,
        $this->country_id,
        $this->district,
        $this->population
    ]);
    }
}