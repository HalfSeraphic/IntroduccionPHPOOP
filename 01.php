<?php
declare(strict_types=1);
include 'includes/header.php';

//Definir clase
class Producto
{ //Las clases no emplean parentesis, tienen un cuerpo que si

    public function __construct(public string $nombre, public int $precio, public bool $disponible) //Este es un magic method, los public son modificadores de acceso
    {
    }

    public function mostarProducto()
    {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
}

$producto = new Producto('Tablet', 200, true);
$producto->mostarProducto();


echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor curvo', 300, true);

$producto = new Producto('Tablet', 200, true);
$producto2->mostarProducto();
echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';