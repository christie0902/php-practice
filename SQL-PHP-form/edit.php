<?php

require_once 'bootstrap.php';
$id = $_GET['id'] ?? null;
if($id)
{
    $country = DB::selectOne('
    SELECT *
    FROM `countries`
    WHERE `id` = ?
    ', [
        $id
    ], 
    'Country'
);
}
else
{
    $country = new Country;
}

include 'alerts.php'
?>
<?php if ($id) : ?>
    <form action="store.php?id=<?= $id ?>" method="post">
<?php else : ?>
    <form action="store.php" method="post">
<?php endif; ?>

<label for="name">Name of country:</label>
<br>
<input type="text" name="name" id="name" value=<?=old('name' , $country->name)?>>
<br><br>

<label for="code">Code:</label>
<br>
<input type="text" name="code" id="code" value=<?=old('code' , $country->code)?>>
<br><br>

<label for="continent">Continent:</label>
<br>
<input type="text" name="continent" id="continent" value=<?=old('continent' , $country->continent)?>>
<br><br>

<label for="region">Region:</label>
<br>
<input type="text" name="region" id="region" value=<?=old('region' , $country->region)?>>
<br><br>

<label for="population">Population:</label>
<br>
<input type="text" name="population" id="population" value=<?=old('population' , $country->population)?>>
<br><br>
<button>Submit</button>
<a href="list.php">Back to List</a>

</form>
