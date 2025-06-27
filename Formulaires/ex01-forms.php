<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 1 Formulaire</title>
</head>
<body>
    <form action="./ex01-forms-traitement.php">
            <!-- Action: donner la page php à associer -->
        <label for="nom">Tape ton nom:</label>
        <input type="text" id="nom" name="nom"> 
            <!-- # id pour lier le label ou Javascript avec input (ou autre)
                name est la clé et input de l'user est la valeur de l'array dans lequel les données seront mises. Nom de l'array: $_GET-->
        <br>
        <label for="age">Tape ton âge:</label>
        <input type="number" id="age" name="age">
        <br>
        <label for="inscription">Date d'inscription</label>
        <input type="date" name="inscription" id="inscription">
        <br>
        <input type="submit" value="Envoyer">
            <!-- ou <button type="submit">Envoyer</button> -->
    </form>
</body>
</html>