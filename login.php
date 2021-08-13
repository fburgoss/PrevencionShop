<?php session_start() ?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>PrevencionShop | Inicio sesion</title>    
	<?php include_once('./include_views/styles.php') ?>
  </head>
  <body>

  <!-- navbar -->
  <?php include_once('./include_views/navbar.php')?>
  <!-- end navbar -->
  
  	<div class="container">
		<!-- Page Content goes here -->
		<!-- Verificar si se accedio por redireccion desde cliente_auth.php -->
		<?php if (array_key_exists('failure', $_GET) and $_GET['failure'] == '1'):?>
			<!-- Agregar este mensaje en un globo de texto o similar -->
			<div class="row">
				<div class="col m10">
				<h5>No se ha encontrado el usuario</h5>
			</div>
		<?php endif; ?>
			<div class="row">
				<div class="col m10">
				<h3>Ingresa a PrevencionShop</h3>
			</div>

			<div class="row">
				<div class="col m6 s12">		
					<form action="auth/cliente_login.php" method="post">
						<div class="input-field col m12">
							<i class="material-icons prefix">email</i>  
							<input type="text" name="Email" placeholder=" Ingrese su Email ">
						</div>
						<div class="input-field col m12">
							<i class="material-icons prefix">password</i>
							<input type="password" name="Contraseña" placeholder=" Ingrese su contrseña ">
						</div>
							<div class="input-field col m12">
							<i class="material-icons prefix">password</i>
							<input type="password" name="VerificarContraseña" placeholder=" Verificar contraseña ">
						</div>
						<div class="input-field col m12">
							<button class="btn waves-effect waves-light" type="submit" name="action">Ingresar
							<i class="material-icons right">send</i>
							</button>
						</div>
						</div>
					</form>
				</div>
			</div>
	</div>

	<!-- footer -->
	<?php include_once('./include_views/footer.php')?>
	<!-- end footer -->

	<!-- scripts -->
	<?php include_once('./include_views/scripts.php') ?>
	<!-- end scripts -->  

  </body>
</html>
