Escreva uma função que receba um número natural e imprima os três primeiros
caracteres do dia da semana correspondente ao número. Por exemplo, 7 corresponde
a “SAB”. O procedimento deve mostrar uma mensagem de erro caso o número
recebido não corresponda a um dia da semana. Gere também um programa que
utilize essa função, chamando-a, mas antes lendo um valor para passagem de
parâmetro.

<?php

function DiasDaSemana ($semana) {
    if ($semana==1) {
        $resposta== "DOM";
    } elseif ($semana==2) {
        $resposta = "SEG";
    } elseif ($semana==3) {
        $resposta = "TER";
    } elseif ($semana==4) {
        $resposta ="QUA";
    } elseif ($semana==5) {
        $resposta = "QUI";
    } elseif ($semana==6) {
        $resposta = "SEX";
    } elseif ($semana==7) {
        $resposta = "SAB";
    } else { 
        $resposta= "ERRO";
    } return $resposta;
}
 
print "Digite um número:";
    $semana=(float) fgets(STDIN);
    $resposta=  DiasDaSemana($semana);
    print $resposta . "\n";
