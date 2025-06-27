<?php

$temp = readline ("Quelle est la température? ");

if ($temp < 15){
    print("ça caille! Montez la température!");
}
elseif ($temp > 25){
    print("Trop chaud! Descendez la température!");
}
else{
    print("Il fait bon");
}

?>