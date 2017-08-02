<html>
<body bgcolor="#dddddd">
	<font size=3 color="#5698dd" face=arial><b> RESULTADO FINAL</b></font>
	<br>
	<br>
	<font size=3 color="#222222" face=arial>
		<?php
			$nome = $_POST["alunoNome"];
			$nota = $_POST["alunoNota"];

			echo "<br>"; 

			if ( $nota < 60 )
				echo "O aluno <b> $nome </b> obteve a nota final <b> $nota </b>, e foi<b> REPROVADO </b>";
			elseif ( ($nota >= 60) and ($nota <= 70) )
				echo "O aluno <b> $nome </b> obteve a nota final <b> $nota </b>,e foi <b> APROVADO </b> com conceito D";
			elseif ( ($nota >= 71) and ($nota <= 80) )
				echo "O aluno <b> $nome </b> obteve a nota final <b> $nota </b>,e foi <b> APROVADO </b> com conceito C";
			elseif ( ($nota >= 81) and ($nota <= 90) )
				echo "O aluno <b> $nome </b> obteve a nota final <b> $nota </b>, e <b> APROVADO </b> com  conceito B";
			else echo "O aluno <b> $nome </b> obteve a nota <b> $nota </b>, e foi <b> APROVADO </b> com  conceito A";
		?>
	</font>
</body>
</html> 