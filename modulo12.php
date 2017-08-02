<?php
namespace Sistema\Modulo;

class Cadastro
{
	public $nome;
	public $endereco;

	public function __construct($nome, $endereco)
    {
    	$this->nome = $nome;
    	$this->endereco = $endereco;
    }

    function __destruct()
    {
    	echo "<br>Elemento destruído: " . $this->nome;
    }
}

$dadosPessoa = new Cadastro('Maria','Rua Lima de Castro');

echo $dadosPessoa->nome;
echo "<br>";
echo $dadosPessoa->endereco;

?>