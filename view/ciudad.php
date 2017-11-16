<h3>Formulario de registro</h3>
<br>
<form method="post" action="index.php?c=ciudad&a=guardar_registro">
    
    Id: <input type="text" name="identificador" value="<?php echo $data['id'] !=NULL ? $data['id'] : "0"; ?>"/><br><br>
    Descripcion: <input type="text" name="descri" value="<?php echo $data['ciu_descri']; ?>" /><br><br>
    <input type="submit" value="SAVE" name="guardar" />
    
</form>

