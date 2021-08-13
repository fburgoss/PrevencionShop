<?php
require './database.php';

// buscar los productos en la base de datos


$productos = json_encode($_SESSION['carrito'], true);

$sql = "insert into pedido (cliente_id, pedido_productos, pedido_monto) values (".$_SESSION['cliente_id'].", '".$productos."', ".$_SESSION['total_carrito'].")";

?>