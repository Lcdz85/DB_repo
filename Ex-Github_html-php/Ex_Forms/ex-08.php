<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-forms 08</title>
</head>
<body>
    <h1>Calculer un prix TVAC</h1>
    <p>Veuillez saisir le prix et le taux de TVA</p>
    
    <form action="./ex-08_traitmt.php">
    
        <label for="prix">Prix</label>
        <input type="number" step="any" name="prix" id="prix">

        <select name="taux">
            <option value="0.21">21 %</option>
            <option value="0.06">6 %</option>
        </select>
        <input type="submit" value="Calculer">
    </form>
</body>
</html>