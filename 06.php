<?php include 'includes/header.php';

interface TrasnporteInterfaz { //La interfaz define la forma, no valida ni tiene codigo
    public function getInfo() : string;
    public function getRuedas() : int;
    public function getColor() : string;
}
class Transporte implements TrasnporteInterfaz { //Las clases abstractas no se instancian, solo se heredan
    public function __construct(protected int $ruedas, protected int $capacidad)
    {

    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

include 'includes/footer.php';