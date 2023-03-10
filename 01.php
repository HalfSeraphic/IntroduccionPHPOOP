<?php
declare(strict_types = 1);
include 'includes/header.php';

//Definir clase
class Producto { //Las clases no emplean parentesis, tienen un cuerpo que si
    public $nombre;
    public $precio;
    public $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible) //Este es un magic method
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}

$producto = new Producto('Tablet', 200, true);
echo "<pre>";
var_dump($producto);
echo "</pre>";


$producto2 = new Producto('Monitor curvo', 300, true);
echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';