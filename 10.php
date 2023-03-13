<?php include 'includes/header.php';

//Conectar DB con PDO
$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'root');

$query = "SELECT titulo from propiedades";

//Consultar la base de datos
//$propiedades = $db->query($query)->fetch();   //Fetch trae uno, fetchall trae todos, fetchobject lo trae en objetos
//var_dump($propiedades);

$stmt = $db->prepare($query);

$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($resultado);
echo "</pre>";


include 'includes/footer.php';