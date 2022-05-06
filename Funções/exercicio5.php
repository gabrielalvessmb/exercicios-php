<?php

function valores($valor1, $valor2, $valor3){

    if(is_int($valor1) && is_int($valor2) == true){
        if(is_int($valor3) == true){
            $resultcresc = [$valor1, $valor2, $valor3];
            $resultdecresc = [$valor1, $valor2, $valor3];
            sort($resultcresc);
            rsort($resultdecresc);
    
            $resultcresc = implode(",", $resultcresc);
            $resultdecresc = implode(",", $resultdecresc);
            return "Resultado crescente: $resultcresc <br> Resultado decrescente: $resultdecresc";
        }
        else{
            return "Um dos valores digitados não é um valor inteiro.";
        }
    }
    else{
        return "Um dos valores digitados não é um valor inteiro.";

     
    }


}



echo valores(3,1,5);



?>