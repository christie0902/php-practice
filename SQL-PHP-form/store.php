<?php

require_once 'bootstrap.php';


$id = $_GET['id'] ?? null;
if (!$id) {
    $country = new Country;
} else {
    // SELECT the columns you want to edit
    $country = DB::selectOne('
    SELECT * 
    FROM `countries`
    WHERE `id` = ?
    ', [
        $id
    ], 
    'Country'
);
    if (!$country) {
        echo "Country not found!";
        exit();
    }
}
// if(!empty($_POST['code']) && code_is_not_present($_POST['code']))

//Validation
$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'Name is a required field.';
}

if (empty($_POST['continent'])) {
    $valid = false;
    $errors[] = 'Continent is a required field.';
}

if ((!is_numeric($_POST['population']))) {
    $valid = false;
    $errors[] = 'Population needs to be a number';
}

if (!$valid) {
    session()->flash('errors', $errors);
    session()->flashRequest();
    if ($id) {
        header('Location: edit.php?id=' .$id);
        exit();
    }else {
        header('Location: edit.php');
        exit();
    }
}
//Validation end

$country->id = $id;
$country->code = $_POST['code'] ?? $country->code;
$country->code_alpha2 = $_POST['code_alpha2'] ?? $country->code_alpha2;
$country->name = $_POST['name'] ?? $country->name;
$country->continent = $_POST['continent'] ?? $country->continent;
$country->region = $_POST['region'] ?? $country->region;
$country->population = $_POST['population'] ?? $country->population;

if ($country->id) {
    DB::update('
        UPDATE `countries`
        SET `code` = ?,
            `code_alpha2` = ?,
            `name` = ?,
            `continent` = ?,
            `region` = ?,
            `population` = ?
        WHERE `id` = ?
    ', 
    [
        $country->code,
        $country->code_alpha2,
        $country->name,
        $country->continent,
        $country->region,
        $country->population,
        $country->id
    ]);
    session()->flash('success_message', 'The record was successfully edited');
    header('Location: edit.php?id=' . $id);
    exit();
} else {
    DB::insert('
        INSERT INTO `countries`
        (`code`, `code_alpha2`, `name`, `continent`, `region`, `population`)
        VALUES
        (?, ?, ?, ?, ?, ?)
    ', 
    [
        $country->code,
        $country->code_alpha2,
        $country->name, 
        $country->continent, 
        $country->region, 
        $country->population
    ]);

    $id = DB::getPdo()->lastInsertId();
    session()->flash('success_message', 'The record was successfully saved');
    header('Location: edit.php?id=' . $id);
    exit();
}

