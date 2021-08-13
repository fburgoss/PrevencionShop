<?php
session_start();
require '../database.php';

// verificar si el usuario existe
$sql = "select * from cliente where cliente_email = '" . $_POST['email'] ."'";

$result = $conn->query($sql);

// comprobar si hay una coincidencia
if ($result->num_rows == 1) {
    // existe un usuario con ese correo
    $conn->close();
    // redirigimos con error
    header("Location: ../registrarse.php?failure=1");
}

var_dump($_POST);
// registrar al usuario enviado desde el formulario

$sql = "insert into cliente ";
$sql = $sql . "(cliente_rut, cliente_email, cliente_password, cliente_primer_nombre, cliente_apellido_paterno) ";
$sql = $sql . "values ";
$sql = $sql . "('". strtolower($_POST['rut'])."', '". strtolower($_POST['email'])."', '" . $_POST['password'] ."', '" . strtolower($_POST['primer_nombre']) ."', '" . strtolower($_POST['apellido_paterno']) ."')";

echo($sql);

if ($conn->query($sql) === TRUE) {
    // cliente registrado exitosamente
    echo "New record created successfully";

    // obtener el último id insertado
    $sql = "select * from cliente where cliente_id = " . $conn->insert_id;
    $result = $conn->query($sql);

    // comprobar si hay una coincidencia
    if ($result->num_rows == 1) {
        // existe un usuario con ese correo

        // redirigimos con error
            // guardar los datos de sesion del cliente encontrado
        $row = $result->fetch_assoc();
        $_SESSION['cliente_id']                 = $row['cliente_id'];
        $_SESSION['cliente_rut']                = $row['cliente_rut'];
        $_SESSION['cliente_primer_nombre']      = $row['cliente_primer_nombre'];
        $_SESSION['cliente_apellido_paterno']   = $row['cliente_apellido_paterno'];
        $_SESSION['cliente_email']              = $row['cliente_email'];
        $_SESSION['carrito']                    = [];

        $conn->close();

        header("Location: ../index.php");
    }


} else {
    // error en el registro de cliente
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>