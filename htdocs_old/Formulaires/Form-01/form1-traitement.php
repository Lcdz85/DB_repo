<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($_POST);
        print ("Nom de famillle: " . $_POST['nom']);
        print ("\nPrénom: " . $_POST['prenom']);
        print ("\nÂge: " . $_POST['age'] - 10);
       


    ?>
</body>
</html>