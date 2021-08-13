<?php session_start(); ?>
<?php require_once('./catalogo_busqueda/busqueda_general.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PrevencionShop | Catálogo</title>
		<?php include_once('./include_views/styles.php') ?>
	</head>
	<body>
		<!-- navbar -->
		<?php include_once('./include_views/navbar.php')?>
		<!-- end navbar -->
		
		<div class="container">
			<!-- Page Content goes here -->


			<div class="row">
				<?php if ($result->num_rows > 0) : ?>
                    <?php while($row = $result->fetch_assoc()) : ?>
						<div class="col s12 m4">
							<div class="card">
								<a href="./catalogo-detail.php?id=<?php echo $row['producto_id']?>">
									<div class="card-image">
										<img src="./imagenes/producto/<?php echo $row['producto_imagen_url'] . ".jpg"?>">
										<a href="./carrito.php?add_item=<?php echo $row['producto_id']?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
									</div>
								</a>
								<div class="card-content">
									<a href="./catalogo-detail.php?id=<?php echo $row['producto_id']?>"><h6><?php echo substr($row['producto_nombre'], 0, 23)?></h6></a>
									<p>$ <?php echo $row['producto_precio']?></p>
								</div>
								<div class="card-action">
									<a href="./carrito.php?add_item=<?php echo $row['producto_id']?>">Agregar al carrito</a>
								</div>								
							</div>
						</div>       
                    <?php endwhile ; ?>

                <?php else : ?>
                    <h3> No se han encontrado productos </h3>
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