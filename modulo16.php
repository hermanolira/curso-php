<?php

abstract class Robo {
    protected $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
    public abstract function roboEnviaMensagem($mensagem);
}

class RoboVoador extends Robo {    
    public function roboEnviaMensagem($mensagem) {
       echo "O robô $this->nome está enviando a seguinte mensagem: $mensagem";
    }
    public function roboVoa(){
        echo "Mensagem da classe derivada: Neste momento, o robô voador $this->nome está voando.";
    }
}

class RoboAndador extends Robo {
    public function roboEnviaMensagem($mensagem) {
        echo "O robô $this->nome está enviando a seguinte mensagem: $mensagem";
    }
    public function roboAnda(){
        echo "Mensagem da classe derivada: Neste momento, o robô andador $this->nome está andando.";
    }
}

$robo1 = new RoboVoador("AERO");
$robo2 = new RoboAndador("TERRAC");
echo "<br>";
$robo1->roboEnviaMensagem("Vou levantar voo.");
echo "<br>";
$robo1->roboVoa();
echo "<br>";
$robo2->roboEnviaMensagem("Vou começar a andar.");
echo "<br>";
$robo2->roboAnda();

?>