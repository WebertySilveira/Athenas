<?php require_once "../config/header.inc.html"; ?>

    <div class="row container">
        <p>&nbsp;</p> 
        <div class="col s12">
            <h5 class="light">Editar Pessoa</h5><hr><br><br>

            <?php
                require_once '../classes/autoload.php';

                $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

                $editPessoa = new Pessoas();
                $editPessoa->dadosDaTabela($id);
            ?>
        </div>
    </div>

<?php require_once "../config/footer.inc.html"; ?>