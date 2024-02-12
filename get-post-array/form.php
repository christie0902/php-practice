<?php
?>
Here is the form
<form action="" method="post">
    <?php foreach($items as $i => $text): ?>
        <label for="items[<?=$i?>]">Item</label>
        <input type="text" name="items[<?=$i?>]" value="<?=htmlspecialchars($text)?>">
    <?php endforeach; ?>

    <label for="items[<?=count($items)?>]">Item</label>
    <input type="text" name="items[<?=count($items)?>]">
    <button>Add</button>
</form>