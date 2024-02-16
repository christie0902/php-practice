<?php
require_once 'Dice.php';

$numberOfDice = $_POST['dice'] ?? null;
$numberOfSides = $_POST['diceSide'] ?? null;
$result = [];

if ($numberOfDice) {
    for ($i = 0; $i < $numberOfDice; $i++) {
        $dice = new Dice($numberOfSides);
        $result[] = $dice->roll();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice</title>
</head>
<body>
    <form action="" method ="post">
        <label for="dice">Enter the number of dice:</label>
        <input type="text" name="dice" id="dice">
        <button>Submit</button>
    <label for="diceSide">How many sides?</label>
    <select name="diceSide" id="diceSide">
        <option value="4">4 sides</option>
        <option value="6">6 sides</option>
        <option value="10">10 sides</option>
        <option value="20">20 sides</option>
    </select>
    </form>

    <?php if ($numberOfDice) : ?>
        <?php foreach ($result as $roll) : ?>
            <div style="border: 1px solid black; width: 30px; height: 30px; text-align: center"><?= $roll ?></div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>