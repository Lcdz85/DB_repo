<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

Bonjour
<?php print("Bonjour") ?>
<?php print(2+4) ?>
<?php print("<h1>Bonjour</h1>") ?>

    <?php
        $categories = ['Jardin', 'Livres', 'Cuisine', 'Bricolage', 'Sport']
    ?>

    <form action="./form-traitmt.php" method="post">
        <select name="categorie">
            <?php
                foreach($categories as $cle => $valeur){
                    print('<option value="'.$valeur.'">'.$valeur.'</option>');
                }
            ?>
            <input name="term" placeholder="Rechercher">
            <input type="submit" value="Envoyer">
        </select>
    </form>
</body>
</html>