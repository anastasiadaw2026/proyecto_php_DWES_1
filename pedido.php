<?php include 'banner.php'; ?>
<?php include 'menu.php'; ?>

<?php 
    // inicializar muy bien / y precio en enteros7
    // los precios del fichero estan en float y si lo multiplico por 1000 me saca un float y hay que castearlo
    $nombre = '';
    $precio = 0;
    $imagen = '';
    $ofertas = '';
    $carta = [
        ["Nigiri", "Salmón", 1.95, "./img/nigiri_salmon.png"], // lo de la ruta de la imagen después será un problemita porque obviemenet en el fichero no viene así
        ["Nigiri", "Salmón flambeado", 1.95, "./img/nigiri_salmon_flambeado.png"],
        ["Nigiri", "Atún", 2.25, "./img/nigiri_atun.png"],
        ["Nigiri", "Atún rojo flambeado", 2.35, "./img/nigiri_atun_rojo_flambeado.png"],
        ["Nigiri", "Langostino", 1.85, "nigiri_ebi.png", "gluten, soja, moluscos"]
    ]
?>

<main>
    <button>Comprobar oferta</button>
    <button>Finalizar pedido</button>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Alergenos</th>
            <th>Cantidad Total</th>
            <th>Total</th>
            <th>Ofertas</th>
        </tr>
        <?php
        foreach ($carta as $producto) {
            $nombre_1 = $producto[0] ?? "";
            $nombre_2 = $producto[1] ?? "";
            $precio = $producto[2] ?? 0;
            $imagen = $producto[3] ?? "";
            $alergenos = $producto[4] ?? "";
            $cantida = 0;
        ?>
        <tr>
            <!-- son más campos que aparecen el csv -->
            <td><?php echo $nombre_1." de ".$nombre_2; ?></td>
            <td><?php echo $precio; ?></td>
            <td><img src= "<?php echo $imagen; ?>" /></td>
            <td><?= $alergenos ?></td>
            <td><input type="number" min="0" step="1" value="0"/></td>
            <td><?= ($precio * 100 * $cantida) / 100 ?></td>
            <td><?php echo $ofertas; ?></td>
        </tr>
        <?php } ?>
    </table>
</main>
<?php include 'footer.php'; ?>