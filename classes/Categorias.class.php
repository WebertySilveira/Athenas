<?php

    session_start();

    require_once 'crudCategorias.php';

    class Categorias extends Connection implements crudCategorias{

        private $id;
        private $categoria;


        protected function setId($id){
            $this->id = $id;
        }
        protected function setCategoria($categoria){
            $this->categoria = $categoria;
        }
        protected function getId(){
            return $this->id;
        }
        protected function getCategoria(){
            return $this->categoria;
        }


        //Métodos específicos
        public function dadosDoFormulario($categoria){
            $this->setcategoria($categoria);
        }
        public function dadosDaTabela($id){
            $conn = $this->connect();

            $this->setId($id);
            $_id = $this->getId();

            $sql = "SELECT * FROM categoria WHERE IDCATEGORIA = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_id);
            $stmt->execute();

            $result = $stmt->fetchAll();

            foreach ($result as $values) {
                require_once "../forms/form-edit-cat.php";
            }
        }


        //Métodos da Interface
        public function create(){
            $cat = $this->getCategoria();

            $conn = $this->connect();
            $sql = 'INSERT INTO categoria VALUES (default, :cat)';

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':cat', $cat);

            if($stmt->execute()){
                $_SESSION['sucesso'] = 'Cadastrado com Sucesso!';
                $destino = header("Location: ../../public/categorias.php");
            }else {
                $_SESSION['erro'] = "Já cadastrado!";
                $destino = header("Location: ../../public/categorias.php");
            }

        }
        public function read(){
            $conn = $this->connect();

            $sql = "SELECT * FROM categoria";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll();

            foreach ($result as $values) {
                $this->setId($values['IDCATEGORIA']);
                $this->setCategoria($values['NOME']);

                $_id  = $this->getId();
                $_cat = $this->getCategoria();

                echo "<tr>";

                echo "<td>$_id</td>";
                echo "<td>$_cat</td>";
                echo "<td><a href='edit-cat.php?id=$_id'><i class='material-icons left'>edit</i>Editar</a></td>";
                echo "<td><a href='../database/categorias/delete.php?id=$_id'><i class='material-icons left'>delete</i>Remover</a></td>";
                echo "<td><a href='pessoas.php?id=$_id'><i class='material-icons left'>person_add</i>Cadastrar Pessoa</a></td>";

                echo "</tr>";
            }

        }
        public function update($id, $categoria){
            $conn = $this->connect();

            $this->setCategoria($categoria);
            $this->setId($id);

            $id = $this->getId();
            $cat = $this->getCategoria();

            $sql = "UPDATE categoria SET NOME = :cat WHERE IDCATEGORIA = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':cat', $cat);
            $stmt->bindParam(':id', $id);

            $stmt->execute();

            $destino = header("Location:../../public/categorias.php");
        }
        public function delete($id){
            $conn = $this->connect();

            $this->setId($id);
            $_id = $this->getId();

            $sql =  "DELETE FROM categoria where IDCATEGORIA = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_id);
            $stmt->execute();

            $destino = header("Location: ../../public/categorias.php");
        }

    }