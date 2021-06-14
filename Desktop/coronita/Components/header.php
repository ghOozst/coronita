<?php
    session_start();
    include("login/connection.php");
    include("login/functions.php");
    $user_data=check_login($con);

?>
<link rel="stylesheet" href="sigin.style.css">
<header>
    <div class="logo-container">
            <img src="./img/logo.svg" alt="logo">
            <h4 class="logo">LA CORONITA</h4>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li ><a href="products.php" class="nav-link">Productos</a></li>
                <li><a href="contact.php" class="nav-link">Contacto</a></li>
            </ul>
        </nav>
        <div class="cart">
            <h3>Hola, <?php echo $user_data['user_name'];?></h3>
            <Button class="primary-btn"><a href="login/logout.php">Cerrar sesion</a></Button>
        </div>
    </header>