<?php include 'includes/header.php';

class Transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {

    }

    public function getInfo(): string
    {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }
}

class Bicicleta extends Transporte
{

}

class Automovil extends Transporte
{

}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();

echo "<hr>";

$auto = new Automovil(4, 4);
echo $auto->getInfo();

echo "<hr>";

include 'includes/footer.php';