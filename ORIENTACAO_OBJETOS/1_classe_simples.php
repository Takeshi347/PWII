<?php
    // Pascal Case (classe com a primeira letra maiúscula)
    class Pessoa{
        // public - A váriavel está acessível externamente
        // private - A váriavel está acessível internamente na classe
        // protected - Está acessível somente através de herança
        public $nome;
        public $idade;

        public function Apresentar(){
            echo "A pessoa $this->nome diz Olá!";
        }
    }

    // Instância
    $aluno = new Pessoa();
    $aluno->nome = "Gengivildo";
    $aluno->idade = 20;

    $aluno2 = new Pessoa();
    $aluno2->nome = "Testonildo";
    $aluno2->idade = 18;

    print_r($aluno);
    print_r($aluno2);
?>