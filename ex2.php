Faça uma função que calcule a hipotenusa. Os catetos são os dados de entrada e a
hipotenusa é o dado de saída.

<?php

function hipotenusa ($cateto1, $cateto2)
{
    $hip= sqrt ($cateto1*$cateto1 + $cateto2*$cateto2);
    return ($hip);
}

print "Digite o valor do cateto 1:" . $cateto1;
$cateto1 = (float) fgets (STDIN);
print "Digite o valor do cateto 2:" . $cateto2;
$cateto2 = (float) fgets (STDIN);

$hip = hipotenusa ($cateto1,$cateto2);
print "O valor da hipotenusa" . $hip;
