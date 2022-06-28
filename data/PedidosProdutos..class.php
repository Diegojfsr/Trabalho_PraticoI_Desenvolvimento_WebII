<?php

    class PedidosProdutos{
        private $idPedido;
        private $idProduto;
        private $Quantidade;
        private $PrecoUnitario;
        private $PrecoTotal;

        public function __construct($idPedido, $IdProduto, $Quantidade, $PrecoUnitario, $PrecoTotal){

                $this->idPedido = $idPedido;
                $this->idProduto = $idProduto;
                $this->Quantidade = $Quantidade;
                $this->PrecoUnitario = $PrecoUnitario;
                $this->PrecoTotal = $PrecoTotal;
        }
        //---------------IdPedido------------------------------
        public function getIdPedido(){
            return $this->getIdPedido;
        }
        public function setIdPedido($idPedido){
            $this->idPedido = $idPedido;
        }
        //---------------IdProduto------------------------------
        public function getIdProduto(){
            return $this->IdProduto;
        }
        public function setIdProduto($IdProduto){
            $this->IdProduto = $IdProduto;
        }
        //---------------Quantidade------------------------------
        public function getQuantidade(){
            return $this->Quantidade;
        }
        public function setQuantidade($Quantidade){
            $this->Quantidade = $Quantidade;
        }
        //---------------PrecoUnitario------------------------------
        public function getPrecoUnitario(){
            return $this->PrecoUnitario;
        }
        public function setPrecoUnitario($PrecoUnitario){
            $this->PrecoUnitario = $PrecoUnitario;
        }
        //---------------PrecoTotal------------------------------
        public function getPrecoTotal(){
            return $this->PrecoTotal;
        }
        public function setPrecoTotal($PrecoTotal){
            $this->PrecoTotal = $PrecoTotal;
        }
        
    }