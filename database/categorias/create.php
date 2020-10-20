<?php

    require_once '../../classes/autoload.php';

    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);

    $newCat = new Categorias();
    $newCat->dadosDoFormulario($categoria);
    $newCat->create();