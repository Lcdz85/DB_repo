<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Le prix TVAC</h1>
    <?php
    // var_dump($_POST);

    print ($_POST['prix']. " € à ". $_POST['tva']. " % = ". $_POST['prix'] + $_POST['prix']*($_POST['tva']/100). "€" );
    // ou 
    $prix = $_POST['prix'];
    $tva = $_POST['tva'];
    print ("Prix TVAC: " . ($prix * (1 + $tva / 100)) );
    ?>
</body>
</html>