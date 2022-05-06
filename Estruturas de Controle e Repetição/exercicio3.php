<?php

$valor1 = 122;
$valor2 = 400;
$valor3 = 301;


if($valor1 > $valor2){
    if($valor1 > $valor3){
        echo "O maior valor é: ".$valor1;
    }
}

if($valor2 > $valor1){
    if($valor2 > $valor3){
        echo "O maior valor é: ".$valor2;
    }
}

if($valor3 > $valor1){
    if($valor3 > $valor2){
        echo "O maior valor é: ".$valor3;
    }
}


?>