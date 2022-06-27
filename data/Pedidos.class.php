<?php

    class Pedidos{
        private $idPedido;
        private $NomeCliente;
        private $NomeVendedor;



        public function __construct($idPedido, $NomeCliente, $NomeVendedor){

                $this->idPedido = $idPedido;
                $this->NomeCliente = $NomeCliente;
                $this->NomeVendedor = $NomeVendedor;
        }
        public function getIdPedido(){
            return $this->getIdPedido;
        }
        public function setIdPedido($idPedido){
            $this->idPedido = $idPedido;
        }
        public function getNomeCliente(){
            return $this->NomeCliente;
        }
        public function setNomeCliente($NomeCliente){
            $this->NomeCliente = $NomeCliente;
        }
        public function getNomeVendedor(){
            return $this->NomeVendedor;
        }
        public function setNomeVendedor($NomeVendedor){
            $this->NomeVendedor = $NomeVendedor;
        }
        
    }