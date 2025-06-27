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
        $animal = $_GET['animal'];

        if ($animal == 'Chien'){
            print("<img src='img/chien.jpg' alt='chien'>");
        }
        elseif ($animal == 'Chat'){
            print("<img src='img/chat.jpg' alt='chat'>");
        }
        else{
            print("<img src='img/perruche.jpg' alt='perruche'>");
        }
    ?>
    
</body>
</html>