<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // var_dump($_POST);
    
    // 1. Stocker le post dans des variables
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['passwordConfirmation'];
    
    // 2. Filtrer les variables
    
    // 3. Vérification MdP
    $erreurs = "";
    if($password != $passwordConfirmation){
        $erreurs = $erreurs . "<h5>Les passwords ne concordent pas</h5>";
    }
    if(mb_strlen($password) < 8){
        $erreurs = $erreurs . "<h5>Le password est trop court.</h5>";
    }
    
    
    // 4. Ou afficher les erreurs
    if(mb_strlen($erreurs)>0){
        header ("location: ./register.php?listErreurs=" . $erreurs);   // redirection vers une autre page et envoi des erreurs via un GET (url)
    }
 
    // 5. si tout va bien, enregistrer dans la DB
    print("<h3>Enregistrement OK</h3>");
        // Créer une connexion avec la DB

        // Créer une requête pour stocker l'utilisateur dans la DB
        //$sql = INSERT INTO utilisateurs (id, nom, email, password) VALUES (NULL, 'Coudyer', 'lo.coudyzer@gmail.com', 'popo1996')

    ?>
</body>
</html>