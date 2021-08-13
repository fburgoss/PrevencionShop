<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PrevencionShop | Carrito de compras</title>
		<?php include_once('./include_views/styles.php') ?>
	</head>
	<body>
		<!-- navbar -->
		<?php include_once('./include_views/navbar.php')?>
		<!-- end navbar -->
		
        <!-- Verificar si se está añadiendo un item al carrito -->
        <?php

            // verificar si se entró sin iniciar sesión
            if(!isset($_SESSION['carrito'])){
                //do your stuff
                $_SESSION['carrito'] = [];
            }

            // si se ingresa con un id, se agrega ese id al carrito
            if (array_key_exists('add_item', $_GET)){
                $add_item = $_GET['add_item'];
                array_push($_SESSION['carrito'], $add_item);
            }
        ?>

        <?php if (count($_SESSION['carrito']) == 0) : ?>
            <div class="row">
                <h3> No tienes productos en tu carrito </h3>
            </div>
        <?php else : ?>

        <!-- buscar los items del carrito -->
        <?php require_once('./catalogo_busqueda/busqueda_carrito.php');?>

        
                
            <?php if ($result->num_rows > 0) : ?>
                <?php 
                    $_SESSION['total_carrito'] = 0;

                    while($row = $result->fetch_assoc()){
                        $_SESSION['total_carrito'] = $_SESSION['total_carrito'] + $row['producto_precio'];
                    }

                    mysqli_data_seek($result, 0);
                ?>
                <div class="row">
                    <div class="col m8">
                        <?php while($row = $result->fetch_assoc()) : ?>
                            <div class="row">
                            <div class="col s12 m12">
                                    <div class="card horizontal">
                                        <div class="card-image">
                                            <img src="./imagenes/producto/<?php echo $row['producto_imagen_url'] . ".jpg"?>"">
                                        </div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                        <a href="./catalogo-detail.php?id=<?php echo $row['producto_id']?>"><h6><?php echo substr($row['producto_nombre'], 0, 23)?></h6></a>
                                        <p>$ <?php echo $row['producto_precio']?></p>
                                        </div>
                                        <div class="card-action">
                                        <a href="#">Remover del carrito</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>                        
                            </div>         
                        <?php endwhile ; ?>
                    </div>
                    <div class="col m4">
                        <div class="row">
                            <div class="col m12 s12">
                                <?php if(isset($_SESSION['cliente_id'])):?>
                                    <h5> Carrito de <?php echo ucfirst($_SESSION['cliente_primer_nombre']) . " " . ucfirst($_SESSION['cliente_apellido_paterno'])?></h5>
                                <?php else:?>
                                    <h5> Carrito de Cliente no registrado</h5>
                                <?php endif;?>
                                <h5><?php echo $result->num_rows ?> productos en tu carrito</h5>
                                <h5>Total a pagar : $<?php echo $_SESSION['total_carrito'] ?> </h5>
                            </div>
                            <div class="col m12 s12">
                                <?php if(isset($_SESSION['cliente_id'])):?>
                                    <a href="./checkout.php" class="waves-effect waves-light btn-large"><i class="material-icons left">credit_card</i>Pagar ahora</a>                                    
                                <?php else:?>
                                    <a disabled class="waves-effect waves-light btn-large"><i class="material-icons left">credit_card</i>Pagar ahora</a>
                                <?php endif;?>                                    
                                
                            </div>                            
                        </div>

                    </div>
                </div>
                
            <?php else : ?>
                <div class="row">
                    <h3>No se ha encontrado el producto</h3>
                </div>
            <?php endif; ?>
        
    <?php endif; ?>

    <!-- footer -->
    <?php include_once('./include_views/footer.php')?>
    <!-- end footer -->

	<!-- scripts -->
	<?php include_once('./include_views/scripts.php') ?>
	<!-- end scripts -->
	
  </body>
</html>