<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement ex-forms 08</title>
</head>
<body>
    <h2>Le Prix TVAC est de:</h2>
    <?php

        // var_dump($_GET);
        $prix = (float)$_GET['prix'];
        $taux = (float)$_GET['taux'];
        $prix_tvac = $prix +($prix*$taux);

        print($prix_tvac." €");
    ?>
    <br>
    <br>
    <button><a href="./ex-08.php">Calculer un autre prix</a></button>
</body>
</html>