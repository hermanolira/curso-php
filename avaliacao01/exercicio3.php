<!DOCTYPE html>
<html>
<body>
<?php
function media($num1, $num2, $num3, $num4) {
	$media = ($num1 + $num2 + $num3 + $num4)/4;
	return $media;
}
echo "Função para retornar o valor médio de 12, 47, 19 e 31<br>";
echo "Valor médio: ".media(12,47,19);
?>
</body>
</html>