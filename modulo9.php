<?php
	$fp = fopen("arquivo1.txt","w");
	fwrite($fp, "Primeiro arquivo de exemplo\n");
	fclose($fp);


	$fp = fopen("arquivo1.txt","a");
	for ($ln = 1; $ln<8; $ln++) {
    	fwrite($fp, "Linha número $ln do arquivo de exemplo\n");
	}
	fclose($fp);


	$fp = fopen ("arquivo1.txt","r");
	while (!feof($fp)) {
    	$linha = fgets($fp,1024);
    	echo "$linha <br>";
	}
	fclose ($fp);
?>

<?php
$fp = fopen ("teste.txt","r");
while (!feof ($fp)) {
    $linha = fgets($fp,1024);
    echo "$linha<br>";
}
fclose ($fp);
?>

<?php
$fp = fopen ("teste.txt","r");
while (!feof ($fp)) {
  $tm=0;
  $linha = fgets($fp);
  $tm = strlen($linha);
    for ($c=0; $c<=$tm; $c++) {
      $char = substr($linha, $c, 1); 
        if ($char == " ") {
          $char = "@";
        } 
      $frase = $frase.$char;
    }
  echo "$frase<br>";
  $frase="";
} 
fclose ($fp);
?>