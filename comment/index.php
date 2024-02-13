
<?php
require_once 'DBBlackbox.php';
require_once 'Comment.php';
require_once 'handle-form.php';


session_start();
$comment= new Comment;
$comments = select(null,null, 'Comment');
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}

if (isset($_SESSION['request_data'])) {
    $request_data = $_SESSION['request_data'];
    unset($_SESSION['request_data']);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disney buys Star Wars maker Lucasfilm from George Lucas | BBC News</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <article>

        <div class="img">
            <img src="img/article.jpg" alt="Disney buys Star Wars maker Lucasfilm from George Lucas">
        </div>

        <h1>Disney buys Star Wars maker Lucasfilm from George Lucas</h1>

        <p class="story">Disney is buying Lucasfilm, the company behind the Star Wars films, from its chairman and founder George Lucas for $4.05bn (£2.5bn).</p>

        <p>Mr Lucas said: "It's now time for me to pass Star Wars on to a new generation of film-makers."</p>

        <p>In a statement announcing the purchase, Disney said it planned to release a new Star Wars film, episode seven, in 2015.</p>

        <p>That will be followed by episodes eight and nine and then one new movie every two or three years, the company said.</p>

    </article>
    <?php if (!empty($errors)) :?>
    <div class="error_message">
        <p>Validation failed.</p>
        <?php foreach ($errors as $error) : ?>
        <p><?=$error?></p>
        <?php endforeach ?>
    </div>
    <?php endif ?>

    <div class="comments">
        <h2>Comment below:</h2>
            <form action="handle-form.php" method="post">
                <label for="nickname">Nickname:</label><br>
                <input type="text" name="nickname" value="<?=$request_data->nickname ?? $comment->nickname?>">
                <br><br>
                <label for="text">Your comment:</label><br>
                <textarea name="text" cols="30" rows="10"><?=isset($request_data['text']) ? $request_data['text'] : ''?></textarea>
                <button>Add</button>
            </form>

        <?php if (!empty($comments)) : ?>
            <?php foreach ($comments as $i => $comment) : ?>
                <h3>Comment <?=$i?></h3>
                <h5>Nickname: <?=$comment->nickname?></h5>
                <p>Content: <?=$comment->text?></p>
            <?php endforeach ?>
        <?php endif ?> 
    </div>
        
</body>
</html>