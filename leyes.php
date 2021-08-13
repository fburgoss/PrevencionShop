<?php 
	session_start();
	if(!isset($_SESSION['cliente_id'])){
		// permitir ver este documento solo si el cliente tiene sesión iniciada
		print('no tiene autorización');
		header('Location: ./login.php');
		die();
	}	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PrevencionShop | Leyes</title>
		<?php include_once('./include_views/styles.php') ?>
	</head>
	<body>
		<!-- navbar -->
		<?php include_once('./include_views/navbar.php')?>
		<!-- end navbar -->
		
		<div class="container">
			<!-- Page Content goes here -->

            <div class="row">
                <h3> Leyes y decretos de prevención </h3>
            </div>			

			<div class="row">
				<div class="col m12 s12">
					<ul class="collection">
                        <li class="collection-item"><i class="material-icons">picture_as_pdf</i> <a target="_blank" href="./leyes_pdf/acta_constitucion_comite_paritario.pdf">Acta de constitución de comité paritario (Valor: $10.990)</a></li>
                        <li class="collection-item"><i class="material-icons">picture_as_pdf</i> <a target="_blank" href="./leyes_pdf/formulario_investigacion_incidentes.pdf">Formulario Investigación de Incidentes (Valor: $15.990)</a></li>
                        <li class="collection-item"><i class="material-icons">picture_as_pdf</i> <a target="_blank" href="./leyes_pdf/formulario_entrega_implementos_proteccion_personal.pdf">Formulario Entrega Implementos Protección Personal (Valor: $$10.990)</a></li>
                        <li class="collection-item"><i class="material-icons">picture_as_pdf</i> <a target="_blank" href="./leyes_pdf/formulario_procedimiento_trabajo_seguro.pdf">Formulario Procedimiento trabajo Seguro (Valor: $$25.990)</a></li>
                        <li class="collection-item"><i class="material-icons">picture_as_pdf</i> <a target="_blank" href="./leyes_pdf/formulario_capacitacion_personal.pdf">Formulario Capacitación Personal (Valor: $$10.990)</a></li>
                    </ul>
				</div>
			</div>

			<!-- footer -->
			<div class="row">
				<div class="col m12">
					<?php include_once('./include_views/footer.php')?>
				</div>
			</div>			
			<!-- end footer -->			

		</div> <!-- End container -->

	<!-- scripts -->
	<?php include_once('./include_views/scripts.php') ?>
	<!-- end scripts -->
	
  </body>
</html>
