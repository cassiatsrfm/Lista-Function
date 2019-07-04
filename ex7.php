Escreva uma função que receba um número inteiro e imprima o mês correspondente
ao número. Por exemplo, 2 corresponde a “fevereiro”. O procedimento deve mostrar
uma mensagem de erro caso o número recebido não faça sentido. Gere também um
programa que leia um valor e chame a função criada.

<?php

function MesesDoAno ($meses) {
    if ($meses==1) {
        $resposta== "JANEIRO";
    } elseif ($meses==2) {
        $resposta = "FEVEREIRO";
    } elseif ($meses==3) {
        $resposta = "MARÇO";
    } elseif ($meses==4) {
        $resposta ="ABRIL";
    } elseif ($meses==5) {
        $resposta = "MAIO";
    } elseif ($meses==6) {
        $resposta = "JUNHO";
    } elseif ($meses==7) {
        $resposta = "JULHO";
    } elseif ($meses == 8) {
        $resposta = "AGOSTO";
    } elseif ($meses == 9) {
        $resposta = "SETEMBRO";
    } elseif ($meses == 10) {
        $resposta = "OUTUBRO";
    } elseif ($meses == 11) {
        $resposta = "NOVEMBRO";
    } elseif ($meses == 12) {
        $resposta = "DEZEMBRO";
    } else { 
        $resposta= "ERRO";
    } return $resposta;
}
 
print "Digite um número:";
    $meses=(float) fgets(STDIN);
    $resposta= MesesDoAno ($meses);
    print $resposta . "\n";

    


