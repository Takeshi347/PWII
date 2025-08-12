<?php

    class Autor{
        private $id;
        private $nome;
        private $biografia;
        private $foto;

        public function __construct($nome, $biografia, $foto){
            $this->nome = $nome;
            $this->biografia = $biografia;
            $this->foto = $foto;
        }

        public function inserir(){ }

        public function buscar(){ }

        public function buscarTodos(){ }

        public function atualizar(){ }

        public function deletar(){ }
    }

?>