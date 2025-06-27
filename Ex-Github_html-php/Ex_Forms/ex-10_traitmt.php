<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement ex-forms 10</title>
</head>
<body>
    <h3>Le produit choisi est:</h3>
    <?php
        // var_dump($_GET);
        $produit = $_GET['produit'];
        print("1 ".$produit);
    ?>
</body>
</html>