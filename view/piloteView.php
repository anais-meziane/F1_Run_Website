<?php $title = "Pilote Detail"; ?>
<?php ob_start();               ?>

<div id="back">
    <a href="index.php">Go back</a>
</div>

<div id="container">
    <?php include('piloteCard.php'); ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php');   ?>