<?php

    class Produtos{
        private $idProduto;
        private $NomeProduto;
        private $DescricaoProduto;
        private $ImagemProduto;


        public function __construct($idProduto, $NomeProduto, $DescricaoProduto, $ImagemProduto){

                $this->idProduto = $idProduto;
                $this->NomeProduto = $NomeProduto;
                $this->DescricaoProduto = $DescricaoProduto;
                $this->ImagemProduto = $ImagemProduto;
        }
        public function getIdProduto(){
            return $this->getIdProduto;
        }
        public function setIdProduto($idProduto){
            $this->idProduto = $idProduto;
        }
        public function getNomeProduto(){
            return $this->NomeProduto;
        }
        public function setNomeProduto($NomeProduto){
            $this->NomeProduto = $NomeProduto;
        }
        public function getDescricaoProduto(){
            return $this->DescricaoProduto;
        }
        public function setDescricaoProduto($DescricaoProduto){
            $this->DescricaoProduto = $DescricaoProduto;
        }
        public function getImagemProduto(){
            return $this->ImagemProduto;
        }
        public function setImagemProduto($ImagemProduto){
            $this->ImagemProduto = $ImagemProduto;
        }
    }