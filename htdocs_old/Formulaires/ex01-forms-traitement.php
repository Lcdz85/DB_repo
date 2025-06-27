<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Je suis la page de traitement du formulaire
    <?php
        $chanson = [
            "titre" => "Où es-tu papa?",
            "durée" => 240,
            "compositeur" => "Stromae"
        ];

        var_dump($chanson);

        var_dump($_GET);

        if ($_GET["age"] > 18){
            print("Bienvenue");
        }
        else{
            print("Accès interdit");
        }
    ?>
</body>
</html>