<html>
	<body>
		<?php
			$nome="Jorge";
			$id="87837639876";
			$cidade="Belo Horizonte";

			$pessoa = fopen("pessoa.txt","a");
			$linha = $nome."\t".$id."\t".$cidade."\n";
			fwrite($pessoa, $linha);
			fclose($pessoa);

			echo "<table border=1>";
			echo "<tr>";
			echo "<td width =20%><b>Nome</b></td>";
			echo "<td width =20%><b>CPF</b></td>";
			echo "<td width =20%><b>Cidade</b></td>";
			echo "</tr>";

			$pessoa = fopen ("pessoa.txt","r");
			while (!feof ($pessoa)) {
				$linha = fgetcsv($pessoa,1024,"\t");
				echo "<tr>";
				echo "<td>$linha[0]</td>";
				echo "<td>$linha[1]</td>";
				echo "<td>$linha[2]</td>";
				echo "</tr>";
			}
			echo "</table>";

			fclose ($pessoa);
		?>
	</body>
</html>