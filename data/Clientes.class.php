<?php
    class Clientes{
        //private $idnoticia;
        //private $titulo;
        //private $texto;
        //private $idusuario;
        private $idCliente;
        private $ClienteNome;
        private $ClienteSobreNome;
        private $ClienteCpf;
        private $ClienteTelefone;
        private $ClienteEmail;
        private $ClienteRua;
        private $ClienteNumero;
        private $ClienteBairro;
        private $ClienteCidade;
        private $ClienteComplemento;

        //public function __construct($idnoticia, $titulo, $texto, $idusuario){
        public function __construct($idCliente, $ClienteNome, $ClienteSobreNome, $ClienteCpf, 
            $ClienteTelefone, $ClienteEmail, $ClienteRua, $ClienteNumero, $ClienteBairro, $ClienteCidade, $ClienteComplemento ){
            //$this->idnoticia = $idnoticia;
            //$this->titulo = $titulo;
            //$this->texto = $texto;
            //$this->idusuario = $idusuario;
            $this->idCliente = $idCliente;
            $this->ClienteNome = $ClienteNome;
            $this->ClienteSobreNome = $ClienteSobreNome;
            $this->ClienteCpf = $ClienteCpf;
            $this->ClienteTelefone = $ClienteTelefone;
            $this->ClienteEmail = $ClienteEmail;
            $this->ClienteRua = $ClienteRua;
            $this->ClienteNumero = $ClienteNumero;
            $this->ClienteBairro = $ClienteBairro;
            $this->ClienteCidade = $ClienteCidade;
            $this->ClienteComplemento = $ClienteComplemento;
        }

        public function get$IdCliente(){
            return $this->idCliente;
        }
        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }
        public function getClienteNome(){
            return $this->ClienteNome;
        }
        public function setClienteNome($ClienteNome){
            $this->ClienteNome = $ClienteNome;
        }
        public function getClienteSobreNome(){
            return $this->ClienteSobreNome;
        }
        public function setClienteSobreNome($ClienteSobreNome){
            $this->ClienteSobreNome = $ClienteSobreNome;
        }
        public function getIdUsuario(){
            return $this->idusuario;
        }
        public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
        public function getIdUsuario(){
            return $this->idusuario;
        }
        public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
        public function getIdUsuario(){
            return $this->idusuario;
        }
        public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
        public function getIdUsuario(){
            return $this->idusuario;
        }
        public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
        
        public function getIdUsuario(){
            return $this->idusuario;
        }
        public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
        
        public function getIdUsuario(){
            return $this->idusuario;
        }
        public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }


    }