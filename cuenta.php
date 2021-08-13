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
		<title>PrevencionShop | Cuenta</title>
		<?php include_once('./include_views/styles.php') ?>
	</head>
	<body>
		<!-- navbar -->
		<?php include_once('./include_views/navbar.php')?>
		<!-- end navbar -->
		
		<div class="container">
			<!-- Page Content goes here -->
            
            <!-- busqueda de datos de cliente -->
            <?php require_once('./cuenta/cliente_busqueda.php'); ?>
			<div class="row">
				<?php if ($result->num_rows > 0) : ?>
                    <h4>Datos del cliente:</h4>
                    <ul class="collection">
                        <?php while($row = $result->fetch_assoc()) : ?>
                            <li class="collection-item"><i class="material-icons">account_circle</i> Primer nombre : <?php echo ucfirst($row['cliente_primer_nombre']); ?></li>
                            <?php if(strlen($row['cliente_segundo_nombre'])):?>
                                <li class="collection-item"><i class="material-icons">account_circle</i> Segundo nombre : <?php echo ucfirst($row['cliente_segundo_nombre']); ?></li>
                            <?php endif; ?>
                            <li class="collection-item"><i class="material-icons">account_circle</i> Apellido paterno : <?php echo ucfirst($row['cliente_apellido_paterno']); ?></li>                            
                            <?php if(strlen($row['cliente_apellido_materno'])):?>
                                <li class="collection-item"><i class="material-icons">account_circle</i> Apellido materno : <?php echo ucfirst($row['cliente_appellido_materno']); ?></li>
                            <?php endif; ?>
                            <li class="collection-item"><i class="material-icons">perm_identity</i> Rut : <?php echo $row['cliente_rut']; ?></li>
                            <li class="collection-item"><i class="material-icons">email</i> Email : <?php echo $row['cliente_email']; ?></li>                            
                        <?php endwhile ; ?>
                    </ul>      

                <?php else : ?>
                    <h3> No se han encontrado al cliente </h3>
                <?php endif; ?>

            </div>
            <!-- busqueda de datos pedidos de cliente -->
            <?php require_once('./cuenta/pedidos_busqueda.php'); ?>
			<div class="row">
				<?php if ($result->num_rows > 0) : ?>
                    <h4>Pedidos del cliente:</h4>
                    <table>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Total</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php while($row = $result->fetch_assoc()) : ?>
                                <tr>
                                    <td><?php echo($row['pedido_id'])?></td>
                                    <td><?php echo(substr($row['pedido_fecha'], 0, 10))?></td>
                                    <td><?php echo(substr($row['pedido_fecha'], 11))?></td>
                                    <td><?php echo($row['pedido_monto'])?></td>
                                </tr>
                            <?php endwhile ; ?>
                        </tbody>
                    </table>

                <?php else : ?>
                    <h3> No se han encontrado pedidos </h3>
                <?php endif; ?>

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