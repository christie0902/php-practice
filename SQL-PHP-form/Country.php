<?php
class Country {
    public ?int $id = null;
    public $code = 'NA';
    public $code_alpha2 = 'NA';
    public ?string $name = null;
    public ?string $continent = null;
    public ?string $continent_id = null;
    public ?string $region = null;
    public $surface_area = null;
    public $population = null;
    public $gnp = null;
    public $head_of_state = null;
    public $capital_city_id = null;

    public function formatPopulation()
    {
        return number_format($this->population, 0, '.', ' ');
    }

    public function getCapitalCity()
    {
        $city = DB::selectOne("
        SELECT *
        FROM `cities`
        WHERE `id` = ?
        LIMIT 1
        ", [
            $this->capital_city_id
        ]);

        return $city;
    }
//in case you want to check if the code is present when the data is set to unique
    function code_is_not_present($code){

        $sql = "SELECT `code` FROM `countries` WHERE `code` = $code";
        return $bool;
    }
}