<?php

$sexo = 'M';
$altura = 1.70;

if ($sexo == 'M'){
    $calculo = (72.7*$altura)-58;
    echo "O peso ideal é: ".$calculo;
}
elseif($sexo == 'F'){
    $calculo = (62.1*$altura)-44.7;
    echo "O peso ideal é: ".$calculo;
}
else{
    echo "Sexo não identificado.";
}


?>