<?php

$success_messaage = session()->get('success_message');
$errors = session()->get('errors', []);
?>
<?php if ($success_messaage) : ?>
    <div class="success-message">
            <?= $success_messaage ?>
        </div>
<?php endif; ?>

<?php if ($errors) : ?>
    <div class="error-message">
        Validation failed. Please check your data and re-submit the form.
    </div>
    <?php foreach ($errors as $error) : ?>
        <div class="error-message">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>