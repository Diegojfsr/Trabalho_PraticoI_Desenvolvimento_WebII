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
        //-----------------idCliente----------------------------
        public function get$IdCliente(){
            return $this->idCliente;
        }
        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }
        //----------------ClienteNome-----------------------------
        public function getClienteNome(){
            return $this->ClienteNome;
        }
        public function setClienteNome($ClienteNome){
            $this->ClienteNome = $ClienteNome;
        }
        //---------------ClienteSobreNome------------------------------
        public function getClienteSobreNome(){
            return $this->ClienteSobreNome;
        }
        public function setClienteSobreNome($ClienteSobreNome){
            $this->ClienteSobreNome = $ClienteSobreNome;
        }
        //-----------------ClienteCpf----------------------------
        public function getClienteCpf(){
            return $this->ClienteCpf;
        }
        public function setClienteCpf($ClienteCpf){
            $this->ClienteCpf = $ClienteCpf;
        }
        //---------------ClienteTelefone------------------------------
        public function getClienteTelefone(){
            return $this->ClienteTelefone;
        }
        public function setClienteTelefone($ClienteTelefone){
            $this->ClienteTelefone = $ClienteTelefone;
        }
        //----------------ClienteEmail-----------------------------
        public function getClienteEmail(){
            return $this->ClienteEmail;
        }
        public function setClienteEmail($ClienteEmail){
            $this->ClienteEmail = $ClienteEmail;
        }
        //----------------ClienteRua-----------------------------
        public function getClienteRua(){
            return $this->ClienteRua;
        }
        public function setClienteRua($ClienteRua){
            $this->ClienteRua = $ClienteRua;
        }
        //---------------ClienteNumero------------------------------
        public function getClienteNumero(){
            return $this->ClienteNumero;
        }
        public function setClienteNumero($ClienteNumero){
            $this->ClienteNumero = $ClienteNumero;
        }
        //---------------ClienteBairro------------------------------
        public function getClienteBairro(){
            return $this->ClienteBairro;
        }
        public function setClienteBairro($ClienteBairro){
            $this->ClienteBairro = $ClienteBairro;
        }
         //---------------ClienteCidade------------------------------
        public function getClienteCidade(){
            return $this->ClienteCidade;
        }
        public function setClienteCidade($ClienteCidade){
            $this->ClienteCidade = $ClienteCidade;
        }
        //---------------ClienteComplemento------------------------------
        public function getClienteComplemento(){
            return $this->ClienteComplemento;
        }
        public function setClienteComplemento($ClienteComplemento){
                $this->idClienteComplemento = $ClienteComplemento;
        }


    }