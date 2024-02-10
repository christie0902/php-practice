<?php
$row_length = 8;
$row_number = 8;

function renderRowWhite ($row_length)
{
    for ($i = 0; $i < $row_length; $i++) {
        if ($i % 2 == 0) {
            echo '<div class="white"></div>';
        } else {
            echo '<div class="black"></div>';
        }
    }
};

function renderRowBlack($row_length) 
{
    for ($i = 0; $i < $row_length; $i++) {
        if ($i % 2 == 0) {
            echo '<div class="black"></div>';
        } else {
            echo '<div class="white"></div>';
        }
    }
}

// function renderBoard($row_length, $isWhite)
// {
//     echo '<div class="row">';
//     for($i = 0; $i < ($row_length ** 2); $i++){
        
//         if ($i % 2 == 0) {
//             if($isWhite == true)
//             {echo '<div class="white"></div>';} 
//             else 
//             {echo '<div class="black"></div>';
//             if($i % $row_length === 0 && $i == $row_length ** 2) {echo '</div>';} else {echo '</div><div class="row">';};};
//         } else {
//             if($isWhite == true)
//             {echo '<div class="black"></div>';}
//             else 
//             {echo '<div class="white"></div>';
//                 if($i % $row_length === 0 && $i == $row_length ** 2) {echo '</div>';} else {echo '</div><div class="row">';};};
//         };
//     };}

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
    <?php for ($i=0;$i<$row_number;$i+=2) :?>
        <div class="row">
        <?php renderRowWhite ($row_length);?>
        </div>
        <div class="row">
        <?php renderRowBlack ($row_length);?>
        </div>
        
    <?php endfor ?>

    <!-- <?php renderBoard($row_length, true); ?> -->
</div>
</body>
</html>