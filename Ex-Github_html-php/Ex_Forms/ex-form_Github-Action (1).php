<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($_GET);

        print("Bienvenue " . $_GET["prenom"] . " " . $_GET["nom"] . ", vous avez ". $_GET["age"]);
        
    ?>
</body>
</html>