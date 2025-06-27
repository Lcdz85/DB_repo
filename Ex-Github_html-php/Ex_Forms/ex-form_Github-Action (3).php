<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Résultat:</h2>
    <?php
        // var_dump($_GET);

        $nb = mt_rand(1,3);
        $chiffre = $_GET["chiffre"];

        if ($chiffre<1 or $chiffre>10){
            print("Chiffre erroné!<br>");
            $lien_url = ("http://127.0.0.1/Ex-Github/Ex_Forms/ex-03.php");
        }
        else{
            if ($chiffre == $nb){
                print("Gagné!<br>");
                print("<img src='http://127.0.0.1/Ex-Github/Ex_Forms/win.jpg'></img><br>");
                $lien_url = "http://127.0.0.1/Ex-Github/Ex_Forms/ex-03.php";
            }
            else {
                print("Perdu<br>");
                $lien_url = "http://127.0.0.1/Ex-Github/Ex_Forms/ex-03.php";
            }
        }

    ?>
    <img src="" alt="">
    <button><a href="<?php echo $lien_url ?>">Recommencer</a></button>
    <a href=""></a>
</body>
</html>