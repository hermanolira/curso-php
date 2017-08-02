<?php
	//phpinfo();

	// comentario em uma linha

	/*
	 * comentário em 
	 * múltiplas linhas.
	 */

	$nome = "Hermano";

	echo "Olá, $nome!<br>";
	echo "FIM!!!<br><br>";

	$valores = array (345,267,199,68,23,11,9);
	echo "{$valores[3]}, ";
	echo "{$valores[6]}, ";
	echo "{$valores[2]}, ";
	echo "{$valores[4]}";

	echo '<br>';
	echo '<br>';
	echo '<br>';

	$vetor = array ("decimal" => "noventa", 81 => 9, "cidade" => "Belo Horizonte", 3 =>"QUARTO");
	echo $vetor["decimal"];
	echo "<br>";
	$elemento = $vetor[81];
	echo $elemento;
	echo "<br>";
	echo $vetor["cidade"];
	echo "<br>";
	echo $vetor[3];

	echo '<br>';
	echo '<br>';
	echo '<br>';

	$Rosa = array( 1 => "Sagarana",
	               2 => "Corpo de Baile",
	               3 => "Noites do sertão",
	               4 => "Grande Sertão: Veredas",
	               5 => "Tutaméia");
	
	echo " Um pouco de Guimarães Rosa ";

	echo "<li>$Rosa[1]</li>";
	echo "<li>$Rosa[2]</li>";
	echo "<li>$Rosa[3]</li>";
	echo "<li>$Rosa[4]</li>";
	echo "<li>$Rosa[5]</li>";

	echo '<br>';
	echo '<br>';
	echo '<br>';

	$cadastro = array (array ('0001', 'Fernando Silva' , '34567823412'),
	                   array ('0002', 'Marcia Fonseca' , '89023477823'),
	                   array ('0003', 'Elizete Almeida', '88965478690'));


	echo $cadastro[0][0].' - '.$cadastro[0][1].' - '.$cadastro[0][2].' ';
	echo '<br>';
	echo $cadastro[1][0].' - '.$cadastro[1][1].' - '.$cadastro[1][2].' ';
	echo '<br>';
	echo $cadastro[2][0].' - '.$cadastro[2][1].' - '.$cadastro[2][2].' ';

	echo '<br>';
	echo '<br>';
	echo '<br>';

	for($lin = 0; $lin < 3; $lin++) {
		for($col = 0; $col < 3; $col++) {
	    	echo $cadastro[$lin][$col]." - ";
	    }
	    echo "<br>";
	}

	echo '<br>';
	echo '<br>';
	echo '<br>';

	$vetor = array ("Números" => array (1 => "UM", 2 => "DOIS", 3 => "TRÊS"));
	echo $vetor["Números"][1];
	echo "<br> ";
	echo $vetor["Números"][2];
	echo "<br> ";
	echo $vetor["Números"][3];

	echo "<br>";
	echo "<br>";
	echo "<br>";

	$diagonal = array ( array('0','0','0','0','0','0'),
	                    array('0','0','0','0','0','0'),
	                    array('0','0','0','0','0','0'),
	                    array('0','0','0','0','0','0'),
	                    array('0','0','0','0','0','0'),              
	                    array('0','0','0','0','0','0'));
	for($lin = 0;$lin < 6;$lin++)
	{
	    for($col = 0;$col < 6;$col++)
	    {
	      echo $diagonal[$lin][$col];
	    }
	  echo "<br>";
	}

	echo "<br>";

	for($lin = 0;$lin < 6;$lin++)
	{
	    for($col = 0;$col < 6;$col++)
	    {
	      if ($lin==$col)
	      {
	        $diagonal[$lin][$col]=1;
	      }
	      echo $diagonal[$lin][$col];
	    }
	  echo "<br>";
	}

	class Aeronave
   	{
   		// atributos e métodos
   		function tipoAeronave($modelo)
  		{
  			echo $modelo;
  		}
   	} 


 	$aviao = new Aeronave;

 	$aviao->tipoAeronave("Airbus A380");

	$valor = "Curso de PHP - Serpro";
	echo "$valor <br>";
	$valor = NULL;
	echo "$valor";


	$valor1 = 12;
	echo $valor1;
	echo"<br>";
	echo gettype($valor1);
	echo "<br>";
	$valor2 = (double)$valor1;
	echo $valor2;
	echo"<br>";
	echo gettype($valor2);


	define("LIVRO", "Grande Sertão: Veredas");
	define("AUTOR", "João Guimarães Rosa");
	define("ANO_DE_PUBLICAÇÃO", "1956");
	echo LIVRO;
	echo "<br>";
	echo AUTOR;
	echo "<br>";
	echo ANO_DE_PUBLICAÇÃO;




		