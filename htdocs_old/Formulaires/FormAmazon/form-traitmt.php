<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
    <?php
        var_dump($_POST);

        $categorie = $_POST['categorie'];
        $term = $_POST['term'];

        print('Recherche '.$term.' dans la catégorie '.$categorie.'.')
    ?>
</body>
</html>