<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
</head>
<body>

    <form action="./registerTraitement.php" method="POST">
        Nom: <input type="text" name="nom"><br>
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        Confirmer mdp: <input type="password" name="passwordConfirmation"><br>
        <input type="submit" value="Enregistrer">
    </form>

    <?php
    if(isset($_GET['listErreurs'])){
        $listErreurs = $_GET['listErreurs'];
        print("<br>Les erreurs sont: ".$listErreurs);
    }
    ?>

</body>
</html>