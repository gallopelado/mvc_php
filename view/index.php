<h3>Registro de ciudades</h3>
<table border="2" width="5" cellspacing="6">
    <thead>
        <tr>
            <th>ID</th>
            <th>DESCRIPCION</th>
            <th>ACCION</th>
        </tr>
    </thead>
    <?php foreach ($query as $data) { ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['ciu_descri']; ?></td>
            <td>
                <a href="index.php?c=ciudad&a=ciudad&_id=<?php echo $data['id']; ?>">Editar</a>
                <a href="index.php?c=ciudad&a=delete&_id=<?php echo $data['id']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
    <tbody>
    </tbody>
</table>

