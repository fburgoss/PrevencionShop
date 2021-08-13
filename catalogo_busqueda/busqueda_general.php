<?php
// echo getcwd(); // mostrar directorio en el que estamos
require './database.php';

// buscar los productos en la base de datos
$sql = "select * from producto order by rand()";

$result = $conn->query($sql);

?>