<?php

trait ExemploDeTrait
{
    private $atributo;

    public function fazerAlgumaCoisa()
    {
        echo "Alguma coisa<br>";
    }
}

trait OutroExemploDeTrait
{
    private $atributo;

    public function fazerOutraCoisa()
    {
        echo "Outra coisa<br>";
    }
}


class Classe
{
    use ExemploDeTrait
    {
        ExemploDeTrait::fazerAlgumaCoisa as fazerAlgoDiferente;
    }
}

class OutraClasse {}

class Classe2 extends OutraClasse
{
    use ExemploDeTrait, OutroExemploDeTrait;
}

$c1 = new Classe();
$c2 = new Classe2();

echo $c1->fazerAlgoDiferente();
echo $c2->fazerAlgumaCoisa();
echo $c2->fazerOutraCoisa();

?>