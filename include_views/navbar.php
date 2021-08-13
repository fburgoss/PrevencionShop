<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">PrevencionShop</a>
        <ul id="nav-mobile" class="right">
            
            <!-- Menus generales -->
            
            <li><a href="./index.php">Home</a></li>
            <li><a href="./login.php">Ingresar</a></li>
            <li><a href="./registrarse.php">Registro</a></li>
            <li><a href="./catalogo.php">Catálogo</a></li>
            <!--li><a href="contacto.php">Contacto</a></li-->
            <li><a href="./carrito.php">Carrito</a></li>

            <!-- Menus para usuario logueado -->
            <?php if (array_key_exists('cliente_id', $_SESSION)):?>
                <li><a href="./cuenta.php"><?php echo ucfirst($_SESSION['cliente_primer_nombre']);?></a></li>
                <li><a href="./auth/cliente_logout.php">Salir</a></li>
            <?php else: ?>
                <li><a href="./cuenta.php">Cuenta</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>