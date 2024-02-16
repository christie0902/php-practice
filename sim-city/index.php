<?php

require_once "DB.php";
require_once "DB_functions.php";

require_once "Country.php";

$success = DB::connect('localhost', 'world', 'root', '');

// replace this fix array by countries retrieved from the world database

$query = ' 
SELECT *
FROM `countries`
';
$countries = DB::select($query, [], 'Country');


// $countries = [
//     [
//         'id' => 5,
//         'name' => 'Albania',
//     ],
//     [
//         'id' => 23,
//         'name' => 'Bulgaria',
//     ],
//     [
//         'id' => 138,
//         'name' => 'Macedonia',
//     ],
//     [
//         'id' => 216,
//         'name' => 'Turkey',
//     ],
// ];

?>

<body>
    <h1 style="text-align: center; color: #bf3952; font-family: arial; margin-top: 30px">SimCity 4000</h1>

    <form action="build_city.php" method="post" style="margin: 0 auto; width: 50%; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <label for="name" style="display: block; margin-bottom: 10px;">City name: </label>
        <input type="text" name="name" id="name" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>

        <label for="country_id" style="display: block; margin-bottom: 10px;">Country: </label>
        <select name="country_id" id="country_id" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;">
            <?php foreach ($countries as $country) : ?>
                <option value="<?= $country->id ?>"><?= $country->name ?></option>
            <?php endforeach; ?>
        </select>

        <br>
        <label for="district" style="display: block; margin-bottom: 10px;">District: </label>
        <input type="text" name="district" id="district" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>
        
        <label for="population" style="display: block; margin-bottom: 10px;">Population: </label>
        <input type="text" name="population" id="population" style="width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc;"><br>
        
        <button style="display: block; width: 100%; padding: 10px; background-color: #bf3952; color: #fff; border: none; border-radius: 4px; cursor: pointer;">BUILD!</button>
    </form>
</body>

