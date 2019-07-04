Faça uma função para converter uma temperatura em graus Fahrenheit para Celsius. A
temperatura em Fahrenheit é o dado de entrada e a temperatura em Celsius é o dado
de saída. Utilize a fórmula C = (F - 32) * 5/9, onde F é a temperatura em Fahrenheit e
C é a temperatura em Celsius.

<?php

function converter ($fahrenheit)
 {
     $celsius =($fahrenheit-32) * 5/9;
     return $celsius;
 }

 echo " Digite uma temperatura em Fahrenheit:";

$fahrenheit = fgets (STDIN);
$celsius = converter ($fahrenheit);

echo $fahrenheit . "Fahrenheits equivale a "  . $celsius . "Celsius"; 


