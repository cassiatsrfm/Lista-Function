Escreva uma função que recebe 2 números inteiros n1 e n2 como entrada e retorna a
soma de todos os números inteiros contidos no intervalo [n1,n2]. Use esta função em
um programa que lê n1 e n2 do usuário e imprime a soma.

<?php
function soma($numeroInicio, $numeroFim) {
    $somaNumerosIntervalo = 0;
        for ($contador = $numeroInicio; $contador <= $numeroFim; $contador++) { 
            $somaNumerosIntervalo += $contador;
        }
            return $somaNumerosIntervalo;
}
    print "\n Digite o número de início, para a soma sequencial: ";
        $numeroInicio = (float) fgets(STDIN);
    print "\n Digite o número que limitará a sequência de soma: ";
        $numeroFim = (float) fgets(STDIN);
        $somaTotal = soma($numeroInicio, $numeroFim);
    print "\n\n A soma de todos os números presentes no intervalo [$numeroInicio, $numeroFim] é igual a " . $somaTotal . " . \n\n\n";
?>
