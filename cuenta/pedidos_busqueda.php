<?php
// echo getcwd(); // mostrar directorio en el que estamos
require './database.php';

// buscar los productos en la base de datos

$sql = "select * from pedido where cliente_id = ". $_SESSION['cliente_id'] . " order by pedido_id desc";

$result = $conn->query($sql);

?>