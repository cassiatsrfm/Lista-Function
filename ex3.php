Escreva um programa para ler as notas das duas avaliações de um aluno no semestre.
Faça uma função que receba as duas notas por parâmetro e calcule e escreva a média
semestral e a mensagem “PARABÉNS! Você foi aprovado!” somente se o aluno foi
aprovado (considere 6.0 a média mínima para aprovação).

<?php


function notas ($nota1,$nota2){
  $media = ($nota1 + $nota2) / 2;
  if ($media >= 6.0) {
      print "Média semestral =" . $media;
      print "PARABÉNS! Você foi aprovado!";
  } 
  else {
    print "Média semestral =" . $media;
    print "Infelizmente você foi reprovado!";
  }
}
print "Digite a primeira nota do aluno";
$nota1 = (float) fgets (STDIN);

print "Digite a segunda nota do aluno";
$nota2 = (float) fgets (STDIN);

notas ($nota1,$nota2);

