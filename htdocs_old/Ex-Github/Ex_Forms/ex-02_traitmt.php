<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    var_dump($_GET);

    $nom = mb_strtolower($_GET["nom"]);  
    $prenom = mb_strtolower($_GET["prenom"]);
    // mb_strtolower() sert à mettre toutes les lettres en minuscule


    if ($nom == "cdz" and $prenom == "lo"){
        print("Que la Force soit avec toi");
        $lien = "Accès Starwars";
        $lien_url = "https://www.starwars.com/";
    }
    else{
        print("Accès refusé");
        $lien = "Retour";
        $lien_url = "http://127.0.0.1/Ex-Github/Ex_Forms/ex-02.php";
    }
    ?>
    <br>
    <a href="<?php echo $lien_url ?>"><?php echo $lien ?></a>
</body>
</html>

<!-- if ($_GET["nom"] == "Cdz" and $_GET["prenom"] == "Lo"){
            print("Que la Force soit avec toi!");
            print(<a href="https://www.starwars.com/">Starwars</a>)
        }
    else{
            print("Tu ne passeras pas!")
    } -->