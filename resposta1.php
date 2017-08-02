<html>
<body>
<?php
	$nota = 95;

	echo "A nota do aluno foi $nota";

	echo "<br>";
	
	if ( $nota < 60 ):
	    echo "Aluno REPROVADO";
	elseif ( ($nota >= 60) and ($nota < 70) ):
	    echo "Aluno APROVADO com  conceito D";
	elseif ( ($nota >= 71) and ($nota < 80) ):
	    echo "Aluno APROVADO com  conceito C";
	elseif ( ($nota >= 81) and ($nota < 90) ):
	    echo "Aluno APROVADO com  conceito B";
	else:
	    echo "Aluno APROVADO com  conceito A";
	endif;
?>
</body>
</html>