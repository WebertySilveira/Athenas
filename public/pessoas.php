<?php require_once '../config/header.inc.html'; ?>

<div class="row container">
    <div class="col s12"> 
        <p>&nbsp;</p>    
        <h5 class="light">Cadastro de Pessoas</h5><hr>

        <?php 
            $id_categoria = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
            require_once '../forms/form-add-pessoa.php';
        ?>
    </div>
</div>

<?php require_once '../config/footer.inc.html'; ?>