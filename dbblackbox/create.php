<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new review</title>
</head>
<body>
    <form action="insert.php" method ="post">
        <label for="movie">Movie name</label><br>
        <input type="text" name="movie" value="">
        <br><br>
        <label for="text">Text:</label:text> <br>
        <textarea name="text" cols="30" rows="10"></textarea>
        <br><br>
        <label:text>Rating:</label:text> <br>
        <input type="number" name="rating" value="5.0">
        <br><br>

        <button>Submit review</button>
    </form>
</body>
</html>