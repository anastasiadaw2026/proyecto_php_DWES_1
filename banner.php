<?php 
    $title = '¡Bienvenido a mySushi!';
    $estate = 'Conectar';
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
            <input type="text"  placeholder="Usuario"/>
            <input type="text" placeholder="Clave"/>
            <button><?php echo $estate; ?></button>
        </section>
    </header>
