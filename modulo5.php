<?php

$Var1 = 7;
$Var2 = 2;

If ($Var1 > $Var2)
	echo "A variável Var1 é maior que a Var2";


echo "<br>";
echo "<br>";
echo "<br>";


$Var1 = 7;
$Var2 = 2;
$Var3 = "Madagascar";

if ($Var1 > $Var2 || $Var3 == "Madagascar") {
    echo "A variável Var1 é maior que Var2<br>";
    echo "A variável Var2 é menor que Var1<br>";
    echo "O conteúdo de Var3 realmente é Madagascar";
}


echo "<br>";
echo "<br>";
echo "<br>";



if ($Var1 > $Var2 || $Var3 == "Madagascar") :
    echo "A variável Var1 é maior que Var2<br>";
    echo "A variável Var2 é menor que Var1<br>";
    echo "O conteúdo de Var3 realmente é Madagascar";
endif;


echo "<br>";
echo "<br>";
echo "<br>";


$Var1 = 13;
$Var2 = 10;
if ($Var1 == $Var2) {
    echo "As variáveis Var1 e Var2 são iguais <br>";
} else {
    echo "As variáveis Var1 e Var2 são diferentes";
}

echo "<br>";
echo "<br>";
echo "<br>";

$Var1 = 7;
$Var2 = 10;
$Var3 = 7;
$Var4 = "Brasil";
if ($Var1 < $Var2 || $Var1 == $Var3 ) {
    echo "If número 1: O conteúdo da variável Var1 é menor que Var2 ou as duas possuem conteúdos idênticos<br>";
}
if ($Var1 > $Var2 && $Var4 == "Chile" ) {
    echo "If número 2: A variável Var1 é maior que Var2 e o conteúdo da Var4 é Chile'.<br>";
}
if ( $Var4 = "Brasil" && $Var3 > $Var2) {
        echo "If número 3: O conteúdo da variável Var4 é 'Brasil' e Var3 é menor que Var2.";
}


echo "<br>";
echo "<br>";
echo "<br>";



$nota = 52;
if ( $nota < 60 )
    echo "Aluno REPROVADO";
elseif ( ($nota >= 60) && ($nota < 70) ) 
    echo "Aluno APROVADO com  conceito D"; 
elseif ( ($nota >= 71) && ($nota < 80) ) 
    echo "Aluno APROVADO com  conceito C"; 
elseif ( ($nota >= 81) && ($nota <= 90) )
    echo "Aluno APROVADO com  conceito B";
else echo "Aluno APROVADO com  conceito A";


echo "<br>";
echo "<br>";
echo "<br>";


$Dia = 4;
switch ($Dia) {
  case 1:
     echo "Domingo";
     break;
  case 2:
     echo "Segunda-Feira";
     break;
  case 3:
     echo "Terça-Feira";
     break;
  case 4:
     echo "Quarta-Feira";
     break;
  case 5:
     echo "Quinta-Feira";
     break;
  case 6:
     echo "Sexta-Feira";
     break;
  case 7:
     echo "Sábado";
     break;
  default:
     echo "Não existe este dia na semana";
}

echo "<br>";
echo "<br>";
echo "<br>";

$valor = 0;
while ($valor <8) :
    echo "Valor agora é: $valor<br>";
    $valor++;
endwhile;

$valor = 0;
do {
    echo "O valor agora é $valor <br>";
    $valor++;
} while ($valor < 1);


for ($passo = 1; $passo <= 8; $passo++) {
    echo "O número do passo é: $passo <br>";
}


$vetor = array("Primeiro elemento", 
               "Segundo elemento", 
               "Terceiro elemento",
               "Quarto elemento",
               "Quinto elemento");
foreach ($vetor as $elemento) {
    echo "Posição no vetor: $elemento <br>";
}

$arr = array("one", "two", "three");
foreach ($arr as $key => $value) {
    echo "Chave: $key; Valor: $value\n<br>";
}








