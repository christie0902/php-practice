<?php
    // is the current user administrator?
    $user_is_admin = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($user_is_admin == true): ?>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Eshop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Link just for administrators</a></li>
            <li><a href="#">Another link just for administrators</a></li>
        </ul>
    <?php else: ?>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Eshop</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    <?php endif; ?>

</body>
</html>
 
