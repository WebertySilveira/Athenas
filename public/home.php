<?php 
    require_once '../config/header.inc.html';
    
?>

<div class="row container">
    <div class="col s12"> 
        <p>&nbsp;</p>    
        <h5 class="light">Pessoas</h5><hr><br><br>
        
        <?php require_once '../forms/form-consulta.php' ?>

        <table class="striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>CATEGORIA</th>
                </tr>
            </thead>
            <tbody>
                <h5 class="light">Dados Cadastrados</h5><hr>
                <?php
                    require_once "../database/pessoas/read.php";
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../config/footer.inc.html'; ?>