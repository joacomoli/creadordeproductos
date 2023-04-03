<?php
//Nota: Antes de usar el código PHP, asegúrate de cambiar "mi_bd" por el nombre de tu propia base de datos y "productos" por el nombre de tu propia colección.
// Conectar a la base de datos
$mongo = new MongoDB\Client("mongodb://localhost:27017");
$coleccion = $mongo->mi_bd->productos;

// Obtener los valores del formulario
$cantidad = $_POST['cantidad'];
$nombres = $_POST['nombres'];
$descripciones = $_POST['descripciones'];

// Insertar cada producto en la base de datos
for ($i = 0; $i < $cantidad; $i++) {
    $producto = array(
        'nombre' => $nombres[$i],
        'descripcion' => $descripciones[$i]
    );
    $coleccion->insertOne($producto);
}

// Redirigir al usuario de vuelta al formulario
header('Location: formulario.php');
exit;
?>
