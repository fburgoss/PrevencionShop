<?php
session_start();
require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
	$sql ="INSERT INTO users (email,password)  VALUES (:email,:password)";
	$stmt = $conn->prepare($sql);
	$stmt ->bindParam('email',$_POST['email']);
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt ->bindParam(':password' ,$password);

	 if  ($stmt ->execute()) {
			$message = 'Usuario creado satisfactoriamente';
		} else {
			$message = 'disculpa, no se pudo crear usuario intente nuevamente';
		}
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PrevencionShop | Registrarse</title>
		<?php include_once('./include_views/styles.php') ?>
	</head>
	<body>


		<?php if(!empty($message)): ?>
			<p><?= $message ?></p>
		<?php endif; ?>

	<!-- navbar -->
	<?php include_once('./include_views/navbar.php')?>
	<!-- end navbar -->

	<div class="container">
		<!-- Page Content goes here -->
		<div class="row">
			<div class="col m10">
			<h1>REGISTRATE</h1>
		</div>

      <div class="row">
			<form action="./auth/cliente_registro.php" method="post">
				<div class="input-field col m6">
					<i class="material-icons prefix">email</i>
					<input type="text" name="email" placeholder=" email@example.com" required>
				</div>
				<div class="input-field col m6">
					<i class="material-icons prefix">person</i>
					<input type="text" name="rut" placeholder=" ingrese su rut" required>
				</div>
				<div class="input-field col m6">
					<i class="material-icons prefix">person</i>
					<input type="text" name="primer_nombre" placeholder=" primer nombre" required>
				</div>
				<div class="input-field col m6">
					<i class="material-icons prefix">person</i>
					<input type="text" name="segundo_nombre" placeholder=" segundo nombre">
				</div>
				<div class="input-field col m6">
					<i class="material-icons prefix">person</i>
					<input type="text" name="apellido_paterno" placeholder=" apellido paterno" required>
				</div>
				<div class="input-field col m6">
					<i class="material-icons prefix">person</i>
					<input type="text" name="apellido_materno" placeholder=" apellido materno "> 
				</div>
				<div class="input-field col m6">
					<i class="material-icons prefix">person</i>
					<input type="password" name="password" placeholder=" contraseña" required>
				</div>
				<div class="input-field col m6">
					<i class="material-icons prefix">person</i>
					<input type="password" name="confirm_password" placeholder=" verificar contraseña" required>
				</div>
				<div class="input-field col m6">
					<button class="btn waves-effect waves-light" type="submit" name="action">Registrar
						<i class="material-icons right">send</i>
					</button>
				</div>
			</form>
			</div>
		</div>
	</div>

	<!-- Verificar si se accedio por redireccion desde cliente_registro.php -->
	<?php if (array_key_exists('failure', $_GET) and $_GET['failure'] == '1'):?>
		<!-- Agregar este mensaje en un globo de texto o similar -->
		<h3>Usuario ya existe</h3>
	<?php endif; ?>
	
	 <!-- footer -->
	<?php include_once('./include_views/footer.php')?>
	<!-- end footer -->
	
	<!-- scripts -->
	<?php include_once('./include_views/scripts.php') ?>
	<!-- end scripts -->

 </body>
</html>
