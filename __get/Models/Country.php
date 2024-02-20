<?php

class Country
{
    public $id = null;
    public $code = null;
    public $code_alpha2 = null;
    public $name = null;
    public $continent = null;
    public $continent_id = null;
    public $region = null;
    public $surface_area = null;
    public $population = null;
    public $gnp = null;
    public $head_of_state = null;
    public $capital_city_id = null;

    public $relationships =[];

    public static function getCountryByCode(string $code): ?Country
    {
        return DB::selectOne('
            SELECT *
            FROM `countries`
            WHERE `code_alpha2` = ?
        ', [
            $code
        ], 'Country');
    }

    public function __get($property_name)
    {
        if (array_key_exists($property_name, $this->relationships)) {
        // if this data has already been loaded, return it
        return $this->relationships[$property_name];
        }

        //if the non-existing property is cities then do this
        if ($property_name === 'cities') {
            $this->relationships['cities'] = City::getCitiesForCountry($this->id);
            return $this->relationships['cities'];
        }

        if ($property_name === 'capital_city') {
            $this->relationships['capital_city'] = City::getCitiesForCountry($this->id);
            return $this->relationships['capital_city'] = DB::select("
            SELECT *
            FROM `cities`
            WHERE `id` = ?
            ", [
                $this->capital_city_id
            ], 'City');
            
            return $this->relationship['capita_city'];
        }

        $trace = debug_backtrace();
        trigger_error(
        'Undefined property via __get(): ' . $property_name .
        ' in ' . $trace[0]['file'] .
        ' on line ' . $trace[0]['line'],
        E_USER_NOTICE
        );
    }
}