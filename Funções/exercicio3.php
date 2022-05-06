<?php




function eleva($base, $expoente){
    $verificabase = is_int($base);
    $verificaexpoente = is_int($expoente);
    if($verificabase && $verificaexpoente == 1){
        return $base**$expoente;
    }
    else{
        return 0;
    }
}

echo "Resultado número inteiro: ".eleva(4,4);
echo "<br>Resultado número não inteiro: ".eleva(4,4.5);



?>