<?php
    class Usuario{
        private $idusuario;
        private $nome;
        private $email;
        private $senha;

        public function __construct($idusuario, $nome, 
            $email, $senha){
                $this->idusuario = $idusuario;
                $this->nome = $nome;
                $this->email = $email;
                $this->senha = $senha;
        }
        public function getIdUsuario(){
            return $this->idusuario;
        }
        public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
    }