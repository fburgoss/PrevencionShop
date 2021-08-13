<?php
// echo getcwd(); // mostrar directorio en el que estamos
require './database.php';

// buscar los productos en la base de datos

$sql = "select 
* from
producto 
inner join 
marca
on producto.marca_id = marca.marca_id and producto_id = " . $product_id;


$result = $conn->query($sql);

?>