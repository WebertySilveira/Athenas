<?php 

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $id_categoria = filter_input(INPUT_POST, 'id_categoria', FILTER_SANITIZE_SPECIAL_CHARS);

    require_once '../../classes/autoload.php';
    $newPessoa = new Pessoas();
    $newPessoa->dadosDoFormulario($nome, $email, $id_categoria);
    $newPessoa->create();
