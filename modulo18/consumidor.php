<html>
<body bgcolor="#dddddd">
<?php
    echo "<font size=3 color='#5698dd' face=arial><b><center>Confirmação de Cadastro de Consumidores</center></b></font><br>";

    $cod_con      = $_POST["con_cod"];
    $nome_con     = $_POST["con_nome"];
    $cpf_con      = $_POST["con_cpf"];
    $id_con       = $_POST["con_id"];
    $ender_con    = $_POST["con_ender"];
    $cidade_con   = $_POST["con_cidade"];
    $estado_con   = $_POST["con_estado"];
    $datanasc     = $_POST["con_datanasc"];
    $prof_con     = $_POST["con_prof"];

    $cod_con      = trim($cod_con);
    $nome_con     = trim($nome_con);
    $cpf_con      = trim($cpf_con);
    $id_con       = trim($id_con);
    $ender_con    = trim($ender_con);
    $cidade_con   = trim($cidade_con);
    $estado_con   = trim($estado_con);
    $datanasc     = trim($datanasc);
    $prof_con     = trim($prof_con);

    $datanasc_con = substr($datanasc,6,4).substr($datanasc,3,2).substr($datanasc,0,2);

    if(!($db = mysqli_connect("localhost","root","root"))) {
        echo "<br><center>Não foi possível estabelecer uma conexão com o gerenciador MySQL.</center>.";
        echo "<br>";
        exit;
    }else{
        echo "<center>Ok, conexao com o gerenciador MySQL foi estabelecida.</center>";
        echo "<br><br>";
    }

    if(!($con=mysqli_select_db($db, "cursophp"))) {
        echo "FALHA AO SELECIONAR O BANCO DE DADOS: ERRO ".mysqli_error($db);
        exit;
    } else {
        echo "<center>Ok, o banco de dados foi selecionado.</center>";
        echo "<br>";
    }

    $cod_con      = mysqli_real_escape_string($db, $cod_con);
    $nome_con     = mysqli_real_escape_string($db, $nome_con);
    $cpf_con      = mysqli_real_escape_string($db, $cpf_con);
    $id_con       = mysqli_real_escape_string($db, $id_con);
    $ender_con    = mysqli_real_escape_string($db, $ender_con);
    $cidade_con   = mysqli_real_escape_string($db, $cidade_con);
    $estado_con   = mysqli_real_escape_string($db, $estado_con);
    $datanasc_con = mysqli_real_escape_string($db, $datanasc_con);
    $prof_con     = mysqli_real_escape_string($db, $prof_con);

    $query = "insert into consumidor  values ('".$cod_con."','".$nome_con."','".$cpf_con."','".$id_con."','".$ender_con."', '".$cidade_con."','".$estado_con."','".$datanasc_con."','".$prof_con."')";
    $resultado = mysqli_query($db, $query);
    if ($resultado) {
      echo mysqli_affected_rows($db).'<center>Os dados do consumidor foram inseridos com sucesso na tabela <b>consumidor</b>.</center>';
    } else {
      echo "<center>Ocorreu um erro na inserção dos dados<center>";
      echo "<br>";
    }

  mysqli_close($db); 

  echo "<br><a href='./livraria.html'>Voltar</a>";
?>
</body>
</html>