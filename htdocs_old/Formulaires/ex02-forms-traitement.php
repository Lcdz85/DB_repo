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
        print("Le meeting sera " . $_GET["horaire"]);

        if (isset($_GET["confirmation"])){
            print("<br>RDV confirmé");
        }
        else {
            print("<br>RDV non confirmé");
        }
        // isset vérifie si une valeur est réglée
    ?>
</body>
</html>