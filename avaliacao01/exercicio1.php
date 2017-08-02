








<!DOCTYPE html>
<html>
<body>
<?php
// programa calcula se, num vetor de números inteiros positivos, de 0 até 200.
for ($numero=3; $numero<=200; $numero++) { 
	echo "<br>";
	$primo = 0;
	for ($n=2; $n <= $numero; $n++) { 
		$resto = $numero%$n;
		echo $numero."/".$n." tem resto ".$resto."<br>";
		if ($resto != 0 || $n == $numero) {
			$primo = $primo+1;
		}
	}
	if ($primo == $numero-1) {
		echo "<b>O número ".$numero." é primo<\b><br>";
	}
}
?>
</body>
</html>