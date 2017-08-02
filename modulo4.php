<?php

$Valor1 = 37;
$Valor2 = 9;

// Exemplo de utilização do operador de multiplicação
$Multi = $Valor1 * $Valor2;
echo "O resultado da multiplicação de $Valor1 por $Valor2 é: $Multi<br>";

// Exemplo de utilização do operador de adição 
$Soma = $Valor1 + $Valor2;
echo "O resultado da soma de $Valor1 e $Valor2 é: $Soma<br>";

// Exemplo de utilização do operador de subtração
$Subtrai = $Valor1 - $Valor2;
echo "A diferença entre $Valor1 e $Valor2 é: $Subtrai<br>";

// Exemplo de utilização do operador de divisão
$Div = $Valor1 / $Valor2;
echo "A divisão de $Valor1 por $Valor2 é: $Div<br>";

// Exemplo de utilização do operador de resto
$Resto = $Valor1 % $Valor2;
echo "O resto da divisão de $Valor1 por $Valor2 é: $Resto<br>";

// Exemplo de utilização do operador de exponenciação
$Potencia = $Valor1 ** $Valor2;
echo "$Valor1 elevado à potência $Valor2 é: $Potencia<br>";

echo "<br>";
echo "<br>";
echo "<br>";

$V1 = 2;
$V2 = 4;
$V3 = 10;
$V4 = 14;

$resultado = $V1 + $V2 * $V3;
echo "O resultado de $V1 + $V2 * $V3 é: $resultado <br>";

$resultado2 = $V1 / $V2 * $V3;
echo "O resultado de $V1 / $V2 * $V3 é: $resultado2 <br>";

$resultado3 = $V1 + $V2 - $V3 * $V4;
echo "O resultado de $V1 + $V2 - $V3 * $V4 é: $resultado3 <br>";

$resultado4 = $V4 % $V1 - $V3 * $V4;
echo "O resultado de $V4 % $V1 - $V3 * $V4 é: $resultado4  <br>";

$resultado5 = $V1 + $V2 ** $V3 / $V4;
echo "O resultado de $V1 + $V2 ** $V3 / $V4 é: $resultado5  <br>";


echo "<br>";
echo "<br>";
echo "<br>";


$V1 = 3;
$V2 = 23;
$V3 = 10;
$V4 = 25.6;
$result = $V1 + $V2 * $V3 * $V4 % $V1;
echo "O resultado de $V1 + $V2 * $V3 * $V4 % $V1 é: $result <br>";
$result = ($V1 + $V2) * (($V3 * $V4) % $V1);
echo "O resultado de ($V1 + $V2) * (($V3 * $V4) % $V1) é: $result <br>";
$result = $V1 + ($V2 * ($V3 * ($V4 % $V1)));
echo "O resultado de $V1 + ($V2 * ($V3 * ($V4 % $V1))) é: $result <br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "EXEMPLO DE OPERADOR DE PRÉ-INCREMENTO <br>";
$a = 5;
echo "Variável antes do pré-incremento: $a <br>";
echo "Variável com o pré-incremento: ".++$a."<br>";
echo "Variável após o pré-incremento: ".$a."<br>";
echo "<br>";
echo "EXEMPLO DE OPERADOR DE PÓS-INCREMENTO <br>";
$a = 5;
echo "Variável antes do pós-incremento: $a<br>";
echo "Variável com o pós-incremento: ".$a++."<br>";
echo "Variável após o pós-incremento: ".$a."<br>";
echo "<br>";
echo "EXEMPLO DE OPERADOR DE PRÉ-DECREMENTO <br>";
$a = 5;
echo "Variável antes do pré-decremento: $a <br>";
echo "Variável com o pré-decremento: ".--$a."<br>";
echo "Variável após o pré-decremento: ".$a."<br>";
echo "<br>";
echo "EXEMPLO DE OPERADOR DE PÓS-DECREMENTO <br>";
$a = 5;
echo "Variável antes do pós-decremento: $a<br>";
echo "Variável com o pós-decremento: ".$a--."<br>";
echo "Variável após o pós-decremento: ".$a."<br>";


echo "<br>";
echo "<br>";
echo "<br>";


$x = "Primeiras";
$y = $x . " Histórias";
echo $y;
echo "<br>";
$a = "Primeiras";
$a .= " Histórias";
echo $a;


echo "<br>";
echo "<br>";
echo "<br>";



$Var1 = 0;
$Var2 = 7;
$Var3 = 2;
echo "Valor de Var1: $Var1 <br>";
$Var1 = ($Var2 > $Var3) ? $Var3 : 5;
$Var4 = ($Var2 < $Var3) ? : false;
echo "Valor de Var1 depois da execução do operador ternário: $Var1 <br>";
echo "Valor de Var4 depois da execução do operador ternário: $Var4";


