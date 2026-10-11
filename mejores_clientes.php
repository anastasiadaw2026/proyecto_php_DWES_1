<?php include 'banner.php'; ?>
<?php include 'menu.php'; ?>

<?php 
    $cliente = '';
    $gasto = 0.0;
    $pedidos = 1;
    $media = $gasto / $pedidos;
?>

<main>
    <table>
        <tr>
            <th>Cliente</th>
            <th>Gasto</th>
            <th>Pedidos</th>
            <th>Media</th>
        </tr>
        <!-- ejemplo de fila "generada" -->
        <tr>
            <td><?php echo $cliente; ?></td>
            <td><?php echo $gasto; ?></td>
            <td><?php echo $pedidos; ?> </td>
            <td><?php echo $media; ?></td>
        </tr>
    </table>
</main>
<?php include 'footer.php'; ?>