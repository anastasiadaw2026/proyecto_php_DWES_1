<?php include 'banner.php'; ?>
<?php include 'menu.php'; ?>

<?php 
    $chosed_img = '';
    $button_value = 'Crear';

    // si el usuario ya tiene cuenta creada 
    $username = '';
    $psw = '';
    $name = '';
    $country = '';
    $tel = '';
    $email = '';
    $estate = ''; //disabled or ""

?>

<main>
    <form action="">
        <section id="cuenta">
            <h2>Datos de cuenta</h2>
            <label for="username">Nombre de usuario </label>
            <input type="text" id="username" <?php echo $estate; ?> value = <?php echo $username; ?>>

            <label for="psw">Contraseña </label>
            <input type="password" id="psw" value = <?php echo $psw; ?> />
        </section>

        <section id="datos_personales">
            <h2>Datos personales</h2>
            <label for="name">Nombre completo </label>
            <input type="text" id="name" value = <?php echo $name; ?> />

            <label for="country">País </label>
            <input type="text" id="country" value = <?php echo $country; ?> />

            <label for="tel">Teléfono </label>
            <input type="tel" id="tel" value = <?php echo $tel; ?> />

            <label for="email">Correo</label>
            <input type="email" id="email" value = <?php echo $email; ?> />
        </section>

        <section id="avatar">
            <h2>Avatar</h2>
            <input type="radio" id="av1" />
            <label for=""><img src="https://picsum.photos/id/1020/600/400" alt=""></label>

            <input type="radio" id="av1" />
            <label for=""><img src="https://picsum.photos/id/1025/600/400" alt=""></label>

            <input type="radio" id="av1" />
            <label for=""><img src="https://picsum.photos/id/548/600/400" alt=""></label>

            <input type="file" id="img" />
        </section>
        <button><?php echo $button_value; ?></button>
    </form>
</main>
<?php include 'footer.php'; ?>