<?php $title = "Resultat Detail"; ?>
<?php ob_start();                   ?>

<div id="back">
    <a href="index.php">Go back</a>
</div>

<div id="container">
    <?php include('resultatCard.php'); ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php');   ?>