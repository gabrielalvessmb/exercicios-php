<?php


$vetor = array(31,1,6,4,13,9,12);
print_r($vetor);
echo "<br>Lista alinhada com valores decrescentes<br>";


function vetDecresc($vet){
    rsort($vet);
    return $vet;

}

print_r(vetDecresc($vetor));






 ?>