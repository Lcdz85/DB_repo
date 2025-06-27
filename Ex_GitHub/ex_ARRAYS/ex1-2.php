<?php
    $montants = [10, 20, 50];
    foreach ($montants as $val){
        echo "\n$val";
    };
    
    $montants[] = "8";
    $montants[] = "70";
    echo "\n".$montants[1]."\n".$montants[4];
?>