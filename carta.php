<?php include 'banner.php'; ?>
<?php include 'menu.php'; ?>

<?php 
    $nombre_1 = '';
    $nombre_2 = '';
    $precio = 0.0;
    $imagen = '';
    $alergenos = '';
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
        <!-- ejemplo de fila "generada" -->
        <tr>
            <td>
                <input type="text" value= <?php echo $nombre_1;?> />
                de
                <input type="text" value= <?php echo $nombre_2;?> />
            </td>
            <td> <input type="number" value = ?php echo $precio; ?> </td>
            <td><input type="text" value= <?php echo $imagen;?> /></td>
            <td><input type="text" value= <?php echo $alergenos;?> /></td>
            <td>Ni idea</td>
        </tr>
    </table>
</main>
<?php include 'footer.php'; ?>