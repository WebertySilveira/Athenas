<?php

    session_start();

    class Pessoas extends Connection implements crudPessoas{

        private $idpessoa, $nome, $email, $id_categoria;

        protected function setId($idpessoa){
            $this->id = $idpessoa;
        }
        protected function setNome($nome){
            $this->nome = $nome;
        }
        protected function setEmail($email){
            $this->email = $email;
        }
        protected function setCategoria($id_categoria){
            $this->id_categoria = $id_categoria;
        }

        protected function getId(){
            return $this->id;
        }
        protected function getNome(){
            return $this->nome;
        }
        protected function getEmail(){
            return $this->email;
        }
        protected function getCategoria(){
            return $this->id_categoria;
        }


        public function dadosDoFormulario($nome, $email, $id_categoria){
            $this->setNome($nome);
            $this->setEmail($email);
            $this->setCategoria($id_categoria);
        }


        public function create(){
            $conn = $this->connect();

            $nome = $this->getNome();
            $email = $this->getEmail();
            $id_categoria = $this->getCategoria();

            $sql = "INSERT INTO pessoa values (default, :nome, :email, :id_categoria)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':id_categoria', $id_categoria);
            
            if ($stmt->execute()) {
                $_SESSION['sucesso'] = 'Cadastrado com Sucesso!';
                $destino = header("Location:../../public/categorias.php");
            }else {
                $_SESSION['erro'] = 'Pessoa já cadastrada!';
                $destino = header("Location:../../public/categorias.php");
            }
        }
        public function read($search){
            $conn = $this->connect();
            $search = "%" .$search. "%";

            $sql = "SELECT pessoa.idpessoa, pessoa.nome, pessoa.email, categoria.NOME
                    FROM pessoa 
                    JOIN categoria on categoria.IDCATEGORIA  = pessoa.id_categoria 
                    WHERE pessoa.nome like :search"; 

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':search', $search);
            $stmt->execute();

            $result = $stmt->fetchAll();

            foreach ($result as $values) {
                echo "<tr>";
                echo "<td>" .$values['idpessoa']. "</td>";
                echo "<td>" .$values['nome']. "</td>";
                echo "<td>" .$values['email']. "</td>";
                echo "<td>" .$values['NOME']. "</td>";
                echo "</tr>";
            }
        }
        public function update($idpessoa, $nome, $email, $id_categoria){

        }
        public function delete($idpessoa){

        }
    }