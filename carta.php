<?php include 'banner.php'; ?>
<?php include 'menu.php'; ?>

<?php 
    $nombre_1 = '';
    $nombre_2 = '';
    $precio = 0.0;
    $imagen = '';
    $alergenos = '';

//     Nigiri	Salmón	1.95	nigiri_salmon.png	
// Nigiri	"Salmón flambeado"	1.95	nigiri_salmon_flambeado.png	
// Nigiri	Atún	2.25	nigiri_atun.png	
// Nigiri	"Atún rojo flambeado"	2.35	nigiri_atun_rojo_flambeado.png	
// Nigiri	Langostino	1.85	nigiri_ebi.png
// 

    $carta = [
        ["Nigiri", "Salmón", 1.95, "./img/nigiri_salmon.png"], // lo de la ruta de la imagen después será un problemita porque obviemenet en el fichero no viene así
        ["Nigiri", "Salmón flambeado", 1.95, "./img/nigiri_salmon_flambeado.png"],
        ["Nigiri", "Atún", 2.25, "./img/nigiri_atun.png"],
        ["Nigiri", "Atún rojo flambeado", 2.35, "./img/nigiri_atun_rojo_flambeado.png"],
        ["Nigiri", "Langostino", 1.85, "nigiri_ebi.png", "gluten, soja, moluscos"]
    ]
?>

<main>
    <button>Editar</button>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Alergenos</th>
            <th>Cantidad</th>  <!-- esa fila para que sirve? -->
        </tr>
        <?php
        foreach ($carta as $producto) {
            $nombre_1 = $producto[0] ?? "";
            $nombre_2 = $producto[1] ?? "";
            $precio = $producto[2] ?? 0;
            $imagen = $producto[3] ?? "";
            $alergenos = $producto[4] ?? "";
        ?>
        <tr>
            <td>
                <input type="text" value= "<?php echo $nombre_1;?>" />
                de
                <input type="text" value= "<?php echo $nombre_2;?>" />
            </td>
            <td> <input type="number" value = "<?php echo $precio; ?>" </td>
            <td><input type="text" value= "<?php echo $imagen;?>" ></td>
            <td><input type="text" value= "<?php echo $alergenos;?>" ></td>
            <td>Ni idea</td>
        </tr>
        <?php } ?>
    </table>
</main>
<?php include 'footer.php'; ?>