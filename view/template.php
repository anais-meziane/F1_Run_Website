<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title><?= $title; ?></title>
    <link href="./public/css/style.css" rel="stylesheet" /> 
</head>
<body>
    <header>
        <form class="button" method="GET" action="">
            <button type="submit" name="list" value="1">   Pilote List  </button>
            <button type="submit" name="list" value="2">Grand Prix List </button>
            <button type="submit" name="list" value="3"> Resultat List  </button>
        </form>
    </header>

    <?= $content; ?>

</body>
</html>