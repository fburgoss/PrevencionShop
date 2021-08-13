<?php 
    session_start();

    // obtener información del producto
    $product_id = $_GET['id'];

    require_once('./catalogo_busqueda/busqueda_detalle.php');

    if ($result->num_rows > 0) {
        $producto = $result->fetch_assoc();
    }
    
?>

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
                <?php if ($producto != null) : ?>

                    <div class="col m7 s12">
                        <div class="card">
                            <div class="card-image">
                            <img src="./imagenes/producto/<?php echo($producto['producto_imagen_url'])?>.jpg">
                            <span class="card-title">Card Title</span>
                            </div>
                        </div>
                    </div>
                    <div class="col m5 s12">
                        <div class="row">
                            <div class="col m12 s12">
                                <div class="card blue-grey lighten-1">
                                    <div class="card-content white-text">
                                    <span class="card-title"><?php echo($producto['producto_nombre'])?></span>
                                    <h5>$ <?php echo($producto['producto_precio'])?></h5>
                                    <div class="divider"></div>
                                    <h6><?php echo($producto['marca_nombre'])?></h6>
                                    <p><?php echo($producto['producto_descripcion'])?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m12 s12">
                                <a href="./carrito.php?add_item=<?php echo $producto['producto_id']?>" class="waves-effect waves-light btn-large"><i class="material-icons left">shopping_cart</i>Agregar al carrito</a>
                            </div>                        
                        </div>                    
                    </div>
                    </div>
                    
                <?php else : ?>
                    <h3> No se han encontrado productos </h3>
                <?php endif; ?>

            <div class="divider"></div>


			<!-- productos relacionados -->
            <?php 
                // obtener productos relacionados
                require_once('./catalogo_busqueda/busqueda_general.php');
            ?>

            <?php if($result->num_rows >0): ?>
                <div class="row">
                    <h5>Productos relacionados</h5>
                <?php for ($x = 0; $x <= 3; $x++): ?>
                    <?php $relacionado = $result->fetch_assoc() ?>
                    <div class="col s6 m3">
                        <div class="card small">
                            <a href="./catalogo-detail.php?id=<?php echo $relacionado['producto_id']?>">
                                <div class="card-image">
                                    <img src="./imagenes/producto/<?php echo $relacionado['producto_imagen_url'] . ".jpg"?>">
                                </div>
                            </a>
                            <div class="card-content">
                                <a href="./catalogo-detail.php?id=<?php echo $relacionado['producto_id']?>"><p><?php echo substr($relacionado['producto_nombre'], 0, 23)?></p></a>
                                <p>$ <?php echo $relacionado['producto_precio']?></p>
                            </div>
                        </div>
                    </div>                      
                <?php endfor; ?>
            </div>                
            <?php else: ?>
                <div class="row">
                    No hay productos relacionados
                </div>
            <?php endif; ?>

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