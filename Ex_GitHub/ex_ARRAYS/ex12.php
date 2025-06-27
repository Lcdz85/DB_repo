<?php

$prix = [10, 5.5, 56, 7, 14, 23, 6.75, 102.5, 18, 37.5];

foreach ($prix as $i => $val){
    $prix_tvac[$i] = $val*1.12; 
}

print_r($prix_tvac)
?>