<?php

$tab1 =[3, 6];
$tab2 = [4, 8, 7, 12];

$tab_mult = [];
$schtroumpf = 0;

foreach ($tab1 as $val1){
    foreach ($tab2 as $val2){
        $tab_mult[] = $val1*$val2;
    }
}
print_r($tab_mult);

$nb = count($tab_mult);

for ($i=0; $i<$nb; $i++){
    // $schtroumpf = $schtroumpf + $tab_mult[$i];
    $schtroumpf += $tab_mult[$i];
}
print("La réponse est : $schtroumpf");

?>