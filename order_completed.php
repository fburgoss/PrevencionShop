<?php session_start(); ?>
<?php 
    require_once('./pedido/crear_pedido.php');

    $order_ok = 0;
    if ($conn->query($sql) === TRUE){
        $order_ok = 1;
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PrevencionShop | Pedido completado</title>
		<?php include_once('./include_views/styles.php') ?>
	</head>
	<body>
		<!-- navbar -->
		<?php include_once('./include_views/navbar.php')?>
		<!-- end navbar -->
	<div class="container">

        <div class="row">
            <?php if($order_ok):?>
                <div class="col m8">
                    <h4> Su pedido ha sido completado con éxito</h4>
                </div>
            <?php else:?>
                <div class="col m8">
                    <h4> Ha ocurrido un problema al registrar su pedido</h4>
                </div>
            <?php endif;?>                
            <div class="col m8">
                <a href="./cuenta.php"><h6> ir a mi cuenta</h6></a>
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