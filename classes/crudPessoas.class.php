<?php 

    interface crudPessoas{

        public function create();
        public function read($search);
        public function update($id, $nome, $email, $id_categoria);
        public function delete($id);
    }