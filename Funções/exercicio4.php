<?php



function pesoIdeal($altura, $sexo){
    if($sexo == 'Masculino'){
        return 72.7*$altura-58 ." quilogramas.";
    }
    elseif($sexo == 'Feminino'){
        return 62.1*$altura-44.7." quilogramas.";
    }
    else{
        return "Erro: Sexo não identificado.";
    }
}

echo "Caso 1: Peso ideal para uma pessoa do sexo feminino com 1,75 de altura: ".pesoIdeal(1.75, 'Feminino');
echo "<br>Caso 2: Peso ideal para uma pessoa do sexo masculino com 1,75 de altura: ".pesoIdeal(1.75, 'Masculino');
echo "<br>Caso 3: ".pesoIdeal(1, 1);

?>