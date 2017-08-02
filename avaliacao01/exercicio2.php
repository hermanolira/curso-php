<!DOCTYPE html>
<html>
<body>
<?php
echo "<br>";
echo "<table border=1>";
for ($lin=0; $lin <= 7 ; $lin++) { 
	echo "<tr>";
	for ($col=0; $col <= 7 ; $col++) { 
		$mat[$lin][$col] = 1;
		if (($lin == 0 || $lin == 7)||($col == 0 | $col == 7)) {
			$mat[$lin][$col] = 4;
		} elseif (($lin == 1 || $lin == 6)||($col == 1 || $col == 6)) {
			$mat[$lin][$col] = 3;
		} elseif (($lin == 2 || $lin == 5)||($col == 2 || $col == 5)) {
			$mat[$lin][$col] = 2;
		} elseif (($lin == 3 || $lin == 4)||($col == 3 || $col == 4)) {
			$mat[$lin][$col] = 1;
		}
		$valor = $mat[$lin][$col];
		echo "<td>$valor</td>";
	}
}
echo "</tr>";
echo "</table>";
?>
</body>
</html>