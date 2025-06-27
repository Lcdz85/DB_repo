<?php

$n1 = readline ("Ecris un 1er chiffre: ");
$n2 = readline ("Ecris un 2eme chiffre: ");
$operation = readline ("Quelle opréartion? (+, -, x ou /) : ");

if ($operation == "+"){
    $result = $n1 + $n2;
    print($result);
}
elseif ($operation == "-"){
    $result = $n1 - $n2;
    print($result);
}
elseif ($operation == "x"){
    $result = $n1 * $n2;
    print($result);
}
else{
    $result = $n1 / $n2;
    print($result);
}
?>
