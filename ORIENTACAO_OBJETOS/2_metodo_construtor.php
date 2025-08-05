<?php
    // Pascal Case (classe com a primeira letra maiúscula)
    class Pessoa{
        // public - A váriavel está acessível externamente
        // private - A váriavel está acessível internamente na classe
        // protected - Está acessível somente através de herança
        public $nome;
        public $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function __destructor(){}
        public function __clone(){}

        public function Apresentar(){
            echo "A pessoa $this->nome diz Olá!";
        }
    }

    // Instância
    $aluno = new Pessoa("Gengivaldo", 20);
    // $aluno->nome = "Gengivildo";
    // $aluno->idade = 20;

    $aluno2 = new Pessoa("Testonildo",18);
    // $aluno2->nome = "Testonildo";
    // $aluno2->idade = 18;

    print_r($aluno);
    print_r($aluno2);
?>