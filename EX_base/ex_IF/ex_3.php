<?php

$N1 = readline ("Ecris un 1er chiffre: ");
$N2 = readline ("Ecris un 2eme chiffre: ");
$operation = readline ("Choisis +, -, x ou / :");

if ($operation == "+"){
    $result = $N1 + $N2;
    print($result);
}
elseif ($operation == "-"){
    $result = $N1 - $N2;
    print($result);
}
elseif ($operation == "x"){
    $result = $N1 * $N2;
    print($result);
}
else{
    $result = $N1 / $N2;
    print($result);
}
?>
