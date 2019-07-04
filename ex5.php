Escreva um programa para ler o número de lados de um polígono regular e a medida
do lado (em cm). Faça uma função que receba como parâmetro o número de lados e
a medida do lado deste polígono e calcule e imprima o seguinte:
• Se o número de lados for igual a 3, escrever TRIÂNGULO e o valor do seu
perímetro.
• Se o número de lados for igual a 4, escrever QUADRADO e o valor da sua área.
• Se o número de lados for igual a 5, escrever PENTÁGONO.
Observação: Considere que o usuário só informará os valores 3, 4 ou 5.


<?php

function poligono ($medida_lados, $numero_de_lados){
    if ($numero_de_lados== 3) {
        print "TRIÂNGULO";
        $perimetro = $numero_de_lados * 3;
    }else {
        if ($numero_de_lados == 4){
            print "QUADRADO";
            $area = $numero_de_lados * $numero_de_lados;
        } else {
            if ($numero_de_lados==5) {
                print "PENTÁGONO";
            }
        }
    }
    } return $poligono;

print "Digite 3, 4 ou 5 para ver qual polígono ele é:";
$numero_de_lados = (float) fgets (STDIN);

$poligono = poligono ($medida_lados,$numero_de_lados);