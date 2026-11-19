<!-- aparece cuando le das a finalizar pedido -->
<?php include 'banner.php'; ?>
<?php include 'menu.php'; ?>

<?php 
    $nombre = '';
    $precio = 0.0;
    $cantidad = 0;
    $subtotal = 0.0;
    $ofertas = 0.0;
    $subtotal_total = 0.0;
    $total_ofertas = 0.0;
    $total = 0.0;
?>

<main>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Ofertas</th>
        </tr>
        <!-- ejemplo de fila "generada" -->
        <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php printf("5.2%€", $precio); ?></td>
            <td><?php printf("5.2%€", $cantidad); ?> </td>
            <td><?php printf("5.2%€", $subtotal); ?></td>
            <td><?php printf("5.2%€", $ofertas); ?></td>
        </tr>
    </table>
</main>
<?php include 'footer.php'; ?>