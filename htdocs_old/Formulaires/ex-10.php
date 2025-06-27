<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-forms 10</title>
</head>
<body>
    <h1>Liste déroulante de produits</h1>
    <form action="./ex-10_traitmt.php">
        <label for="produit">Choisissez un produit :</label>
        <select name="produit" id="produit">
            <?php
            $list = [
                'bic',
                'crayon',
                'stylo',
                'feutre',
                'fusain'
            ];
            foreach ($list as $produit) {
                print ("<option value='$produit'>$produit</option>");
            }
            ?>
        </select>
        <input type="submit" value="Valider">
    </form>

</body>

</html>