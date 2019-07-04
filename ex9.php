Escreva uma função que receba dois números inteiros x e y. Essa função deve
verificar se x é divisível por y. No caso positivo, a função deve retornar 1, caso
contrário zero. Escreva também um programa para testar tal função.

<?php

function NumerosInteiros ($x, $y) {
    if ($x%$y== 0) {
        $resposta = 1;
    } else {
        $resposta = 0;
    }
 return $resposta;
}

print "Digite o valor de x:";
$x= (float) fgets(STDIN);

print "Digite o valor de y:";
$y= (float) fgets(STDIN);
 
$resposta= NumerosInteiros ($x,$y);
print $resposta . "\n";

