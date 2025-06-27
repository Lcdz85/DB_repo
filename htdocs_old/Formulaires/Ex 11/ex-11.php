<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-forms 10</title>
</head>
<body>
    <h1>Liste radio button de produits</h1>
    <form action="./ex-10_traitmt.php">
        <label for="produit">Choisissez un produit :</label>
            <?php
            $list = [
                'bic',
                'crayon',
                'stylo',
                'feutre',
                'fusain'
            ];
            foreach ($list as $produit) {
                print ('<input type="radio" name="list" value="'.$produit.'"><br>');
                print ('<img src="./img/'.$produit.'.jpg">');
            }
            ?>
        <br>
        <input type="submit" value="Valider">
    </form>

</body>
</html>