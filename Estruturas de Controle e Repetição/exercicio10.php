<?php 

$i = 50;


do {
    $calculo = 5/9*($i-32);
    echo "Em Fahrenheit: ".$i." Em Graus: ".number_format($calculo, 2, '.', ',');
    echo "<br>";
    $i++;
} while ($i <= 150);

?>