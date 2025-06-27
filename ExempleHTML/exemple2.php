<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple 2</title>
</head>
<body>
    
    <h2>Exemple 2</h2>
    <?php
// Imaginons qu'on obtient cet array depuis une DB
    $produits = [
        'ananas' => 3,
        'poires' => 2,
        'oranges' => 2.5
    ];
    foreach ($produits as $nom => $prix){
        print("<br>Les ".$nom." coûtent ".$prix." euros");
    }
    print("<img src= >");
    ?>
</body>
</html>