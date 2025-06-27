<?php
// Exercice 9
$tab1 = [4, 8, 7, 9, 1, 5, 4, 6];
$tab2 = [7, 6, 5, 2, 1, 3, 7, 4];

for ($i=0; $i<8; $i++){
    $tab3[] = $tab1[$i]+$tab2[$i];
}

print_r($tab3)

?>