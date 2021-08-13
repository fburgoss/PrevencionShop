<?php
// echo getcwd(); // mostrar directorio en el que estamos
require './database.php';

// buscar los productos en la base de datos

$imploded_products = implode(',', $_SESSION['carrito']);
$sql = "select * from producto where producto_id in (". $imploded_products.")";
$result = $conn->query($sql);

?>