<?php

class Robo
{
	protected $nome;
	
	function __construct($nome)
	{
		$this->nome = $nome;
	}

	public function roboEnviaMensagem($mensagem)
	{
		echo "O robô $this->nome está enviando a seguinte mensagem: $mensagem";
	}
}

class RoboVoador extends Robo
{
	
	public function voar()
	{
		echo "Mensagem da classe derivada: Neste momento, o robô voador $this->nome está voando.";
	}
}

class RoboAndador extends Robo
{
	
	public function andar()
	{
		echo "Mensagem da classe derivada: Neste momento, o robô andador $this->nome está andando.";
	}
}

$robo1 = new RoboVoador("AERO");
$robo2 = new RoboAndador("TERRAC");

$robo1->roboEnviaMensagem("Vou levantar voo.");
echo "<br>";
$robo1->voar();
echo "<br><br>";
$robo2->roboEnviaMensagem("Vou começar a andar.");
echo "<br>";
$robo2->andar();



class Carro
{
	function __construct()
	{
    	echo "Construção da classe Carro efetuada<br> ";
    }

    public static function marca()
    {
    	echo "Este carro é da marca XPTK<br> ";
    }

    function __destruct()
    {
    	echo "Destruição da classe Carro efetuada<br>";
    }
}

echo "<br/>";
echo "<br/>";

echo Carro::marca();
 
class CarroPasseio extends Carro
{
    public $modelo;
    public $ano;
    public $placa;

    function __construct($modelo, $ano, $placa)
    {
    	parent::__construct();
    	echo "Construção da classe CarroPasseio<br>";
    	$this->modelo = $modelo;
    	$this->ano    = $ano;
    	$this->placa  = $placa;
    }

    public function __destruct()
    {
    	parent::__destruct();
    	echo "Destruição da classe CarroPasseio<br>";
    }

}

$car = new CarroPasseio("Sedan", "2006", "PRX9021");
$car->marca();

echo "O modelo do carro é: $car->modelo<br>";
echo "O ano do carro é: $car->ano<br>";
echo "A placa do carro é: $car->placa<br>";

?>