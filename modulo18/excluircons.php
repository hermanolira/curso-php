<html> 
<body bgcolor="#dddddd"> 
<?php 

	$codigo = $_POST["id"];

	if(!($db = mysqli_connect("localhost","root","root"))) { 
		echo "<br><center>Não foi possível estabelecer uma conexão com o gerenciador MySQL.</center>"; 
		echo "<br>"; 
		exit; 
	} else{ 
		echo "<center>Ok, conexão com o gerenciador MySQL foi estabelecida.</center>"; 
		echo "<br>"; 
	}

	if(!($conexao = mysqli_select_db($db, "cursophp"))) {
		echo "FALHA AO SELECIONAR O BANCO DE DADOS: ERRO ".mysqli_error($db); 
		exit; 
	} else {
		echo "<center>Ok, o banco de dados foi selecionado.</center>"; 
		echo "<br>"; 
	}

	$query2 = "DELETE FROM consumidor WHERE cod = $codigo";
	$query = "SELECT * FROM consumidor";

	mysqli_query($db, $query2);

	$resultado = mysqli_query($db, $query);

	$numresultado = mysqli_num_rows($resultado);
	
	echo "<center>O registro selecionado foi ".$codigo."</center><br>"; 
	echo "<center><table border=1 bgcolor='#eeeeee'>"; 
	echo "<caption><b><font size=3 color='#5698bb' face=arial>CADASTRO DE CLIENTES ATUALIZADO</font></b></caption>"; 
	echo "<th><font size=3 color='#5698bb' face=arial> Código </font></th><th><font size=3 color='#5698bb' face=arial> Nome </font></th><th><font size=3 color='#5698bb' face=arial> CPF </font></th><th><font size=3 color='#5698bb' face=arial> Identidade</font></th><th><font size=3 color='#5698bb' face=arial> Endereço </th><th><font size=3 color='#5698bb' face=arial> Cidade </font></th><th><font size=3 color='#5698bb' face=arial> Estado </font></th><th><font size=3 color='#5698bb' face=arial> Data Nasc. </font></th><th><font size=3 color='#5698bb' face=arial> Profissão </font></th>"; 
	echo '</font></tr></center>'; 
	
	for ($i = 0; $i < $numresultado; $i++) {
		$row = mysqli_fetch_array($resultado);

		$cod_con    = $row[0]; 
		$nome_con   = $row[1]; 
		$cpf_con    = $row[2]; 
		$id_con     = $row[3]; 
		$ender_con  = $row[4]; 
		$cidade_con = $row[5]; 
		$estado_con = $row[6]; 
		$datanasc   = $row[7]; 
		$prof_con   = $row[8]; 

		$datanasc_con= substr($datanasc,8,2)."/".substr($datanasc,5,2)."/".substr($datanasc,0,4); 

		echo "<tr>"; 
		echo "</tr>"; 
		echo "<tr>"; 
		echo "<td><font size=1 face=arial> $cod_con </font></td><td><font size=2 face=arial> $nome_con </font></td><td><font size=2 face=arial> $cpf_con </font></td><td><font size=2 face=arial> $id_con </font></td><td><font size=1 face=arial> $ender_con </font></td><td><font size=1 face=arial> $cidade_con </font></td><td><font size=2 face=arial> $estado_con </font></td><td><font size=1 face=arial> $datanasc_con </font></td><td><font size=2 face=arial> $prof_con </font></td>"; 
		echo '</tr></center>'; 
	}
	
	echo "</table>"; 
	echo "<a href='livraria.html'>Voltar</a></center>"; 
	mysqli_close($db); 
	echo "</font>"; 
?> 
</font> 
</body> 
</html>