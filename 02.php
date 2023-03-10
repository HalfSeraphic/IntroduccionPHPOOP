<?php
declare(strict_types=1);
include 'includes/header.php';

//Encapsulacion
class Producto
{ //Las clases no emplean parentesis, tienen un cuerpo que si (clase y objeto)
    //Public se puede acceder o modificar en cualquier lugar
    //Protected se puede acceder o modificar solo en la clase
    //Private solo miembros de la clase pueden acceder a el

    public function __construct(protected string $nombre, public int $precio, public bool $disponible) //Este es un magic method, los public son modificadores de acceso
    {
    }

    public function mostarProducto(): void
    {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);
//$producto->mostarProducto();
echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');


echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor curvo', 300, true);

$producto = new Producto('Tablet', 200, true);
//$producto2->mostarProducto();

echo $producto2->getNombre();

/* echo "<pre>";
var_dump($producto2);
echo "</pre>";   */

include 'includes/footer.php';