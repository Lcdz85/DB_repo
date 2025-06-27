<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Créer ARRAY SIMPLE  (liste)
        $noms = ["Sahar", "Annie", "Ayla"];
        // Changer
        $noms[1] = "Orsula";
        // Effacer
        unset ($noms[0]);
        // Ajouter
        $noms[] = "Emilie";
        // Parcourir avec boucle
        foreach ($noms as $index => $valeur){
            print("<br>". $valeur);
        }

        // Créer ARRAY ASSOCIATIF  (dictionnaire)
        $client = [
            "nom" => "Dupont",
            "prénom" => "Emilie",
            "gsm" => "0485236154",
            "actif" => true,
        ];

        foreach ( $client as $cle => $valeur){
            print("<br> ".$cle." : ". $valeur);
        }
        var_dump($client)
    ?>
</body>
</html>