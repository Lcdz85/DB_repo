<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prix Chambre(s)</title>
</head>
<body>
<h2>Prix de <?php echo($_GET['nb'])?> chambre(s) <?php echo($_GET['type_chb'])?>(s):</h2>

    <?php
        // var_dump($_GET);

        $nb_chb = (int)$_GET["nb"];
        $type_chb = $_GET["type_chb"];
        
        $prix_simple = 100;
        $prix_double = 200;
        $prix_suite = 300;

        $prix_variable = "prix_" . $type_chb;

        print($prix_variable * $nb_chb . " €");
    ?>
</body>
</html>