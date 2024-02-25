<?php $title = "Home f1 run"; ?>
<?php ob_start(); ?>

<div class="container">
    <?php
        foreach($grandprixs as $grandprix){
            include('grandPrixCard.php');
        }
    ?>
</div>

<?php $content =ob_get_clean(); ?>
<?php require('template.php');  ?>