<?php $title = "Home f1 run"; ?>
<?php ob_start(); ?>

<div class="container">
    <?php
        $parPage = 23;

        $totalResultats = count($resultats);

        $totalPages = ceil($totalResultats / $parPage);

        $pageCourante = isset($_GET['page']) ? (int) $_GET['page'] : 1;

        $depart = ($pageCourante - 1) * $parPage;

        $resultatsPage = array_slice($resultats, $depart, $parPage);

        foreach ($resultatsPage as $resultat) {
            include('resultatCard.php');
        }

        if ($totalPages > 1) {
            echo '<div class="pagination">';
            for ($i = 1; $i <= $totalPages; $i++) {
                if ($i == $pageCourante) {
                    echo '<span class="current-page"> ' . $i . ' </span>';
                } else {
                    echo '<a href="?list=3&page=' . $i . '"> ' . $i . ' </a>';
                }
            }
            echo '</div>';
        }

    ?>
</div>

<?php $content =ob_get_clean(); ?>
<?php require('template.php');  ?>