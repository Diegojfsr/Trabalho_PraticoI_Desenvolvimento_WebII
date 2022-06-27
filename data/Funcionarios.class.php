<?php
    //class Usuario{
    class Funcionarios{
        private $idFuncionario;
        private $NomeFuncionario;
        private $EmailFuncionario;
        private $SenhaFuncionario;

        //public function __construct($idusuario, $nome, $email, $senha){
        public function __construct($idFuncionario, $NomeFuncionario, $EmailFuncionario, $SenhaFuncionario){
                //$this->idusuario = $idusuario;
                //$this->nome = $nome;
                //$this->email = $email;
                //$this->senha = $senha;
                $this->idFuncionario = $idFuncionario;
                $this->NomeFuncionario = $NomeFuncionario;
                $this->EmailFuncionario = $EmailFuncionario;
                $this->SenhaFuncionario = $SenhaFuncionario;
        }
        public function getIdFuncionario(){
            return $this->getIdFuncionario;
        }
        public function setIdFuncionario($idFuncionario){
            $this->idFuncionario = $idFuncionario;
        }
        public function getNomeFuncionario(){
            return $this->NomeFuncionario;
        }
        public function setNomeFuncionario($NomeFuncionario){
            $this->NomeFuncionario = $NomeFuncionario;
        }
        public function getEmailFuncionario(){
            return $this->EmailFuncionario;
        }
        public function setEmailFuncionario($EmailFuncionario){
            $this->EmailFuncionario = $EmailFuncionario;
        }
        public function getSenhaFuncionario(){
            return $this->SenhaFuncionario;
        }
        public function setSenhaFuncionario($SenhaFuncionario){
            $this->SenhaFuncionario = $SenhaFuncionario;
        }
    }