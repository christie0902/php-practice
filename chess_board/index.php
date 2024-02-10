<?php
$row_length = 8;
$row_number = 8;
$urlKing = [
    'url' =>'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
    'column' => 1,
    'row' => 3
];
$urlQueen = [
    'url' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
    'column' => 5,
    'row' => 7
];
$pieces = [
    0 => $urlKing,
    1 => $urlQueen,
];

// function renderRow($row_length, $isWhite)
// {
         //$isWhite is either 0 or 1 > line starts with white or not
//     for ($i = 0; $i < $row_length; $i++) {
//         if (($i + $isWhite) % 2 == 0) {
//             echo '<div class="white"></div>';
//         } else {
//             echo '<div class="black"></div>';
//         }
//     }
// }

function renderRow($row_length, $thisRow, $pieces)
{
    $isWhite = $thisRow % 2;
    for ($i = 0; $i < $row_length; $i++) {

       foreach($pieces as $piece) {
        if($piece['row'] == $thisRow && $piece['column'] == $i){
            $pieceImg = "<img src='{$piece['url']}'/>";
        break;
        }else{
            $pieceImg = "";
        };
       };

        if (($i + $isWhite) % 2 == 0) {
            echo "<div class='white'>$pieceImg</div>";
        } else {
            echo "<div class='black'>$pieceImg</div>";
        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="board">
    <?php for ($i = 0; $i < $row_number; $i++) : ?>
        <div class="row">
            <?php renderRow($row_length,$i,$pieces);?>
        </div>
    <?php endfor ?>





    <!-- <?php for ($i = 0; $i < $row_number; $i++) : ?>
        <div class="row">
            $determine if $i is even or odd ( 0 or 1 )
            <?php renderRow($row_length, $i % 2);?>
        </div>
    <?php endfor ?> -->

</div>
</body>
</html>

