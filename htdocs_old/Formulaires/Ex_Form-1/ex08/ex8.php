<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 8 Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <h2>Exercice 8</h2>
    <form action="./ex1-traitmt.php" method="POST">
        Prix <input type="number" step="0.01" name="prix"> <br>
        <select name="tva">     <!-- "step" permet d'utiliser les décimales  -->
            <option value="6">6 %</option>
            <option value="21">21 %</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>