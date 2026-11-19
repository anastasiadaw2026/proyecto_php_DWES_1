<?php include 'banner.php'; ?>
<?php include 'menu.php'; ?>
<?php 
    // esto va a cambiar dependeidno si sesion del usuario esta seteado o no;
    $mensaje_bienvenida = "Bienvenido. Por favor, inicia sesión o crea una cuenta.";
?>
<main>

    <p><?= $mensaje_bienvenida ?></p>
</main>
<?php include 'footer.php'; ?>