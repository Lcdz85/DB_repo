<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes élèves</title>
</head>
<body>
    <?php
    $notes = [6, 8, 9, 5, 10];
    foreach ($notes as $val){
        if ($val<10){
            echo "$val rouge";
        }
        else {
        echo "$val";
        };
    };
    ?>
</body>
</html>