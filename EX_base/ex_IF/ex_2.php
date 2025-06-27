<?php

$temp = readline("Quelle est la température? ");

if ($temp >= 15 AND $temp <= 25){
    print("Il fait bon");
}
elseif ($temp < 15){
    print("ça caille !! Montez la température !");
}
else {
    print("Trop chaud ! Descendez la température !");
}
?>