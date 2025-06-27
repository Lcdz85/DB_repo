<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple Html-Php</title>
</head>
<body>
    <h1>Exemple 1 Html et Php</h1>
    <h2>Bonjour</h2>
    <p id="p1">Je suis une page hébergée dans le serveur Apache!</p>
    <?php
        print("<h3>Hello de PHP!</h3>
        <p>Je teste le html dans le php</p>");
    ?>
    <p>je suis un texte ... je pense qu'on va cliquer sur moi!</p>
</body>
<script>
    // prompt("Tout va exlposer")
    document.addEventListener("click", function(){
        // alert("On a cliqué");
        document.getElementById("p1").innerHTML = "Je change le contenu du paragraphe";
    })
</script>
</html>