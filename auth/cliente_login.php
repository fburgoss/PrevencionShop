<?php
session_start();
require '../database.php';

// comprobar si el usuario existe basado en su email
$sql = "select * from cliente where cliente_email = '" . $_POST['Email'] . "' and cliente_password = '" . $_POST['Contraseña'] . "'";

$result = $conn->query($sql);

// comprobar el número de resultados
if ($result->num_rows > 0) {
    // se muestra cada resultado (modificar para leer solo el primero, el while es innecesario)
    while($row = $result->fetch_assoc()) {
        
        // guardar los datos de sesion del cliente encontrado
        $_SESSION['cliente_id']                 = $row['cliente_id'];
        $_SESSION['cliente_rut']                = $row['cliente_rut'];
        $_SESSION['cliente_primer_nombre']      = $row['cliente_primer_nombre'];
        $_SESSION['cliente_apellido_paterno']   = $row['cliente_apellido_paterno'];
        $_SESSION['cliente_email']              = $row['cliente_email'];
        $_SESSION['carrito']                    = [];
    }

    // redirigir al inicio con usuario logueado
    $conn->close();
    header("Location: ../index.php");
    
  } else {
    // no hay resultados, por lo que se muestra un mensaje y redirigimos
    $conn->close();
    header("Location: ../login.php?failure=1");
    
  }

?>