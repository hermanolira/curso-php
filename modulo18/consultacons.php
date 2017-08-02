<html> 
<body bgcolor="#dddddd"> 
<?php 
	
	if(!($db = mysqli_connect("localhost","root","root"))) {
		echo "<br>Não foi possível estabelecer uma conexão com o gerenciador MySQL."; 
		echo "<br>"; 
		exit; 
	} else {
		echo "<center>Ok, conexão com o gerenciador MySQL foi estabelecida.</center>"; 
		echo "<br>"; 
	} 

	if(!($con = mysqli_select_db($db, "cursophp"))) {
		echo "<center>FALHA AO SELECIONAR O BANCO DE DADOS: ERRO ".mysqli_error($db)."</center>"; 
		exit; 
	} else { 
		echo "<center>Ok, o banco de dados foi selecionado</center>"; 
		echo "<br>"; 
	} 

	$query = "SELECT * FROM consumidor ORDER BY cod";
	$resultado = mysqli_query($db, $query); 
	$numresultado = mysqli_num_rows($resultado);

	echo "<br>"; 
	echo "<center><table border=1 bgcolor='#eeeeee'>"; 
	echo "<caption><b><font size=3 color='#5698bb' face=arial>CADASTRO DE CLIENTES</font></b></caption>";

	echo "<tr>";
	echo 
	"<th>
		<font size=3 color='#5698bb' face=arial>Código</font>
	</th>
	<th>
		<font size=3 color='#5698bb' face=arial>Nome</font>
	</th>
	<th>
		<font size=3 color='#5698bb' face=arial>CPF</font>
	</th>
	<th>
		<font size=3 color='#5698bb' face=arial>Identidade</font>
	</th>
	<th>
		<font size=3 color='#5698bb' face=arial>Endereço</font>
	</th>
	<th>
		<font size=3 color='#5698bb' face=arial>Cidade</font>
	<th>
	<th>
		<font size=3 color='#5698bb' face=arial>Estado</font>
	</th>
	<th>
		<font size=3 color='#5698bb' face=arial>Data Nasc.</font>
	</th>
	<th>
		<font size=3 color='#5698bb' face=arial>Profissão</font>
	</th>"; 
	echo "</tr>";
	

	for ($i=0; $i < $numresultado; $i++) {
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
	 
		$datanasc_con = substr($datanasc,8,2)."/".substr($datanasc,5,2)."/".substr($datanasc,0,4); 

		echo "<tr>";
		echo 
		"<td>
			<font size=2 face=arial> $cod_con </font>
		</td>
		<td>
			<font size=2 face=arial> $nome_con </font>
		</td>
		<td>
			<font size=2 face=arial> $cpf_con </font>
		</td>
		<td>
			<font size=2 face=arial> $id_con </font>
		</td>
		<td>
			<font size=2 face=arial> $ender_con </font>
		</td>
		<td>
			<font size=2 face=arial> $cidade_con </font>
		</td>
		<td>
			<font size=2 face=arial> $estado_con </font>
		</td>
		<td>
			<font size=2 face=arial> $datanasc_con </font>
		</td>
		<td>
			<font size=2 face=arial> $prof_con </font>
		</td>"; 
		echo '</tr>';
	}

	echo "</table>"; 
	echo "<font size=2 face=arial><a href='livraria.html'>Voltar</a></font></center>"; 
	mysqli_close($db);
?> 
</body> 
</html>