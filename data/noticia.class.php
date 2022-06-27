<?php
    class Noticia{
        private $idnoticia;
        private $titulo;
        private $texto;
        private $idusuario;

        public function __construct($idnoticia, $titulo,
            $texto, $idusuario){
            $this->idnoticia = $idnoticia;
            $this->titulo = $titulo;
            $this->texto = $texto;
            $this->idusuario = $idusuario;
        }

        public function getIdNoticia(){
            return $this->idnoticia;
        }
        public function setIdNoticia($idnoticia){
            $this->idnoticia = $idnoticia;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        public function getTexto(){
            return $this->texto;
        }
        public function setTexto($texto){
            $this->texto = $texto;
        }
        public function getIdUsuario(){
            return $this->idusuario;
        }
        public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
    }