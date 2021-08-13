<?php
// echo getcwd(); // mostrar directorio en el que estamos
require './database.php';

// buscar los productos en la base de datos

$sql = "select * from cliente where cliente_id = ". $_SESSION['cliente_id'];

$result = $conn->query($sql);

?>