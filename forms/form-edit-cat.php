<form action="../database/categorias/update.php" method="post" class="row">
    <div class="input-field col s12">
    <label for="id">ID</label>
        <input type="text" name="id" value="<?php echo $values['IDCATEGORIA']; ?>" id="" readonly="readonly">
    </div>
    <div class="input-field col s12">
        <label for="Categoria">DIGITE A CATEGORIA</label>
        <input type="text" name="categoria" value="<?php echo $values['NOME']; ?>" id="" required>
    </div>
    <div class="input-field col s12">
        <input type="submit" value="Alterar" class="btn">
        <a href="categorias.php" class="btn red">Cancelar</a>
    </div>
</form>