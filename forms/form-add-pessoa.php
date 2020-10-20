<form action="../database/pessoas/create.php" method="post" class="row">
    <div class="input-field col s12">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required autofocus>
    </div>
    <div class="input-field col s12">
        <label for="email">email</label>
        <input type="text" name="email" id="email" required autofocus>
    </div>
    <div class="input-field col s12">
        <label for="nome">Categoria</label>
        <input type="text" name="id_categoria" id="id_categoria" value="<?php echo $id_categoria ?>" readonly="readonly">
    </div>                                                      
    <div class="input-field col s12">
        <input type="submit" value="cadastrar" class="btn">
        <a href="categorias.php" class="btn red">Cancelar</a>
    </div>
</form>