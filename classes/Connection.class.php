<?php

    abstract class Connection {

        private $servDB = 'mysql:host=localhost; dbname=athenas2';
        private $user = 'root';
        private $pass = '';

        protected function connect() {
            try{
                $conn = new PDO($this->servDB, $this->user, $this->pass);
                $conn->exec("set names utf8");
                return $conn;

            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }


    }