<form action="../database/pessoas/update.php" method="post" class="row"> 
    <div class="input-field col s12">
        <label for="id">ID</label>
        <input type="text" name="id" value="<?php echo $id ?>" readonly="readonly">
    </div>
    <div class="input-field col s12">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $values['nome'] ?>" required autofocus>
    </div>
    <div class="input-field col s12">
        <label for="Email">email</label>
        <input type="text" name="email" id="email" value="<?php echo $values['email'] ?>" required autofocus>
    </div>
    <div class="input-field col s12">
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria" value="<?php echo $values['id_categoria'] ?>" >
    </div>
    <div class="input-field col s12">
        <input type="submit" value="Alterar" class="btn">
        <a href="home.php" class="btn red">Cancelar</a>
    </div>
</form>