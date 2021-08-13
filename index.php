<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PrevencionShop | Inicio</title>
		<?php include_once('./include_views/styles.php') ?>
	</head>
	<body>
		<!-- navbar -->
		<?php include_once('./include_views/navbar.php')?>
		<!-- end navbar -->
		
		<div class="container">
			<!-- Page Content goes here -->

			<div class="row">
				<!-- Elementos de proteccion personal -->
				<div class="col l6 m6 s12">
					<div class="card">
						<div class="card-image">
							<img src="./imagenes/L-4.jpg">
							<span class="card-title">Elementos de proteccion personal</span>
						</div>
						<div class="card-content">
							<p>Elementos de seguridad y protección personal para tu empresa.</p>
						</div>
						<div class="card-action">
							<a href="./catalogo.php">ir al catálogo</a>
						</div>
					</div>
				</div>

				<!-- Elementos de proteccion personal -->
				<div class="col l6 m6 s12">
					<div class="card">
						<div class="card-image">
							<img src="./imagenes/leyes9.png">
							<span class="card-title"></span>
						</div>
						<div class="card-content">
							<p>Conoce en detalle las leyes y decretos de prevención que tu empresa necesita. Requiere que te hayas inscrito a PrevencionShop</p>
						</div>
						<div class="card-action">
							<a href="./leyes.php">pincha acá</a>
						</div>
					</div>
				</div>	
			</div>

			<!-- Qué hacemos -->
			<div class="row">
				<div class="col l12 m12 s12">
					<div class="white-text card">
						<div class="card-panel teal 68709C">
							<div class="card-content">
								<p> ¿Qué hacemos? PrevencionShop es un software desarrollado para facilitar la gestión de prevención de riesgos de tu empresa, gracias a la digitalización de todos sus procesos. Nuestras herramientas te permitirán planificar y administrar la seguridad laboral de tu equipo, evitando accidentes y mejorando la productividad en tu equipo de trabajo.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			  
			<div class="row">
				<div class="col m12">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/tC6eVL_pRho" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

			
		</div> <!-- End container -->
		
		<!-- footer -->
		<?php include_once('./include_views/footer.php')?>
		<!-- end footer -->

	<!-- scripts -->
	<?php include_once('./include_views/scripts.php') ?>
	<!-- end scripts -->
	
  </body>
</html>
