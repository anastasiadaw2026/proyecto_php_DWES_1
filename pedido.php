<?php include 'banner.php'; ?>
<?php include 'menu.php'; ?>

<?php 
    $nombre = '';
    $precio = 0.0;
    $imagen = '';
    $ofertas = '';
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
            <th>Ofertas</th>
        </tr>
        <!-- ejemplo de fila "generada" -->
        <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $precio; ?></td>
            <td><img src= <?php echo $imagen; ?> /></td>
            <td>Ni idea</td>
            <td><input type="number" min="0" step="1" value="0"/></td>
            <td><?php echo $ofertas; ?></td>
        </tr>
    </table>
</main>
<?php include 'footer.php'; ?>