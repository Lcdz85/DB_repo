<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 9: Réservation </title>
</head>
<body>
<h1>Réservation de chambre d'hôtel</h1>
    <p>Combien de chambre souhaitez-vous réserver?</p>
    <form action="./ex9-traitmt.php">
        <label for="nb">Nombre de chambres: </label>
        <input type="number" name="nb" id="nb">
        <select name='type_chb'>
            <option value='simple'>simple(s)</option>
            <option value='double'>double(s)</option>
            <option value='suite'>suite(s)</option>
        </select>
        <input type="submit" value="Prix">
    </form>
</body>
</html>