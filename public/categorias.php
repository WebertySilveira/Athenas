<?php

    require_once '../config/header.inc.html'; ?>

    <div class="row container">
        <div class="col s12"> 
            <p>&nbsp;</p>    
            <h5 class="light">Adicionar</h5><hr><br><br>

            <?php 
                if (isset($_SESSION['sucesso'])) {
                    echo "<p class='center green lighten-2 white-text' padding:10px>";
                    echo $_SESSION['sucesso'];
                    unset ($_SESSION['sucesso']);
                    echo "</p>";
                }elseif (isset($_SESSION['erro'])) {
                    echo "<p class='center green lighten-2 white-text' padding:10px>";
                    echo $_SESSION['erro'];
                    unset ($_SESSION['erro']);
                    echo "</p>";
                }
                require_once '../forms/form-add-cat.php';
            ?>

        </div>
    </div>

    
    <div class="row container">
        <div class="col s12">
            <h5 class="light">Categorias Cadastradas</h5>

            <table class="striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CATEGORIA</th>
                    </tr>
                    <tbody>
                        <?php
                            require_once '../database/categorias/read.php';
                        ?>
                    </tbody>
                </thead>
            </table>
        </div>
    </div>

<?php require_once '../config/footer.inc.html'; ?>