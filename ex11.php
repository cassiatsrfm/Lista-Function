Crie uma função que realize a conversão de Polegadas (pol) para Centímetros (cm),
onde pol é passado como parâmetro e cm é retornado. Sabe-se que 1 polegada tem
2.54 centímetros. Crie também um programa para testar tal função.


<?php

function polegadas ($pol) {
    $cm = $pol * 2.54;
   return $cm;
}

print "Digite uma medida em polegadas:";
$pol = (float) fgets (STDIN);

$cm = polegadas ($pol);

print "Polegadas equivale a, ".$cm.", centímetros";