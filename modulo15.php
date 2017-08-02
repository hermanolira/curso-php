<?php

interface nomeInterface {
    public function nomeMetodo1($var1, $var2);
    public function nomeMetodo2();
}

class nomeClasse implements nomeInterface {
	public function nomeMetodo1($var1, $var2) {

	}
    public function nomeMetodo2() {

    }
}

interface ImprimeTexto {
    public function recebeTexto($frase);
}

class Imprime implements ImprimeTexto {
    public function recebeTexto($frase) {
        echo "Interface implementada pela classe Imprime:<br> O texto $frase foi recebido.";
    }
}

$imp = new Imprime();
echo $imp->recebeTexto("GRANDE SERTÃO: VEREDAS");

abstract class NomeClasseAbstrata {

    abstract function nomeMetodoAbstrato();// método abstrato.
   
    function nomeMetodoComum() { // método comum, se houver.
   
    }
}

abstract class Classe1 {
    abstract function recebeTexto($texto);
}

class Classe2 extends Classe1 {
    function recebeTexto($texto) {
        echo "O texto $texto foi recebido.";
    }
}

$classeh = new Classe2;
$classeh->recebeTexto("Memórias Póstumas de Brás Cubas");


?>