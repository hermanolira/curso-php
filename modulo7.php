<?php
$numero_dia = 3;

function dia_da_semana($dia) {
  switch ($dia) {
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
}

dia_da_semana($numero_dia);

echo "<br>";
echo "<br>";
echo "<br>";

$meu_vetor = array("um", "dois", "três", "quatro", "cinco");

function vetor($vetor)
{
    foreach ($vetor as $valor) {
      echo "Valor: $valor<br>";
    }
}

vetor($meu_vetor);


echo "<br>";
echo "<br>";
echo "<br>";

function media($num1, $num2, $num3, $num4) {
    $media = ($num1 + $num2 + $num3 + $num4) / 4;
    echo "O valor médio de $num1, $num2, $num3 e $num4 é: $media";
}

media(12, 47, 19, 31);


echo "<br>";
echo "<br>";
echo "<br>";

function media2(...$num) {

    foreach ($num as $val) {
      $media += $val;
    }

    $media = $media/4;

    echo "O valor médio de $num é: $media";
}
media2(12, 47, 19, 31);

echo "<br>";
echo "<br>";
echo "<br>";

function referencia(&$palavra) {
  $palavra = 'Texto atual';
}

$str = 'Texto original';
referencia($str);
echo $str;


echo "<br>";
echo "<br>";
echo "<br>";


echo abs(-2); 
echo "<br>";
echo chr(78);
echo "<br>";
echo max(10,99,2,3,67);
echo "<br>";
echo pi();
echo "<br>";
echo sqrt(256);
echo "<br>";
echo rand(4,88);
echo "<br>";
echo strlen("Qual será o tamanho desta string?");
echo "<br>";
echo sin(78);
echo "<br>";
//phpinfo();

echo "<br>";
echo "<br>";

function fun_media($num1, $num2, $num3, $num4) {
   $media = ($num1 + $num2 + $num3 + $num4) / 4;
   return $media;
}
echo "Função para retornar o valor médio de 12, 47, 19 e 31<br>";
echo "Valor médio: ".fun_media(12, 47, 19, 31);  

