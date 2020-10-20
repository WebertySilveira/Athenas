<?php

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);

    require_once '../../classes/autoload.php';

    $update = new Categorias();
    $update->update($id, $categoria);