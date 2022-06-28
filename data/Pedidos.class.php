<?php

    class Pedidos{
        private $idPedido;
        private $NomeCliente;
        private $NomeVendedor;
        private $PedidoFrete;
        private $PedidoPrecoTotal;
        private $PedidoPrecoTotalProduto;
        private $PedidoData;




        public function __construct($idPedido, $NomeCliente, $NomeVendedor, $PedidoFrete, $PedidoPrecoTotal, 
            $PedidoPrecoTtotalProduto, $PedidoData){

                $this->idPedido = $idPedido;
                $this->NomeCliente = $NomeCliente;
                $this->NomeVendedor = $NomeVendedor;
                $this->PedidoFrete = $PedidoFrete;
                $this->PedidoPrecoTotal = $PedidoPrecoTotal;
                $this->PedidoData = $PedidoData;
        }
        //---------------IdPedido------------------------------
        public function getIdPedido(){
            return $this->getIdPedido;
        }
        public function setIdPedido($idPedido){
            $this->idPedido = $idPedido;
        }
        //---------------NomeCliente------------------------------
        public function getNomeCliente(){
            return $this->NomeCliente;
        }
        public function setNomeCliente($NomeCliente){
            $this->NomeCliente = $NomeCliente;
        }
        //---------------NomeVendedor------------------------------
        public function getNomeVendedor(){
            return $this->NomeVendedor;
        }
        public function setNomeVendedor($NomeVendedor){
            $this->NomeVendedor = $NomeVendedor;
        }
        //---------------PedidoFrete------------------------------
        public function getPedidoFrete(){
            return $this->PedidoFrete;
        }
        public function setPedidoFrete($PedidoFrete){
            $this->PedidoFrete = $PedidoFrete;
        }
        //---------------PedidoPrecoTotal------------------------------
        public function getPedidoPrecoTotal(){
            return $this->PedidoPrecoTotal;
        }
        public function setPedidoPrecoTotal($PedidoPrecoTotal){
            $this->PedidoPrecoTotal = $PedidoPrecoTotal;
        }
        //---------------PedidoData------------------------------
        public function getPedidoData(){
            return $this->PedidoData;
        }
        public function setPedidoData($PedidoData){
            $this->PedidoData = $PedidoData;
        }
        
    }