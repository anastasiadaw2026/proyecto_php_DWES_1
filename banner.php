<?php 
    $title = '¡Bienvenido a mySushi!';
    $estate = 'Conectar';
    // funcion que vea donde estoy y que sea dinamico el title
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
        <section title="Si se el usuario reliaza el Login correctamente, parecerá su avatar, nombre y rol en lugar del formulario">
            <form action="">
            <?php 
            if (empty($_GET["usuario"]) or empty($_GET["pasw"])) {
            ?>
                <input type="text"  placeholder="Usuario" name="usuario"/>
                <input type="text" placeholder="Clave" name="pasw"/>
            <?php 
            } else {
                // aquí se comrobará si el usuario y contraseña exister enel ficheri de usuarios y que rol tienen. Estos datos se guardaran en una sesion y se mantedrán a lo largo de toda la sesion. De momento a falta de un fichero de usuarios se realizara un tipo de autentificación basic
                $usuario = $_GET["usuario"] ?? "";
                $pasw = $_GET["pasw"] ?? "";
                $rol_comodin = "usuario";
                echo "{$usuario}({$rol_comodin})";
                $estate = "Desconectar"; 
            }
            ?>
                <!-- eso realmente funciona sin comprobar el action ya que al no tener datos en el get vuelve al inicial. Pero en el futuro hay que tener en cuanta el echo de que hay que quitarlo del sesion -->
                <button><?php echo $estate; ?></button> 
            </form>
        </section>
    </header>
