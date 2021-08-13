<?php
session_start();
// destruir (cerrar) la sesión de php
session_unset();
// redirección al index
header("Location: ../index.php");

?>