<?php

    interface crudCategorias{

        public function create();
        public function read();
        public function update($id, $categoria);
        public function delete($id);
        
    }