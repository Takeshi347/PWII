<?php

class Pessoa(){
    public $nome;
    public $email;
}

class Aluno extends Pessoa{
    public $rm;
}

// extends - pega as informações do public
class Professor extends Pessoa{
    public $formacao;
    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }
}

    $aluno = new Aluno();
    $aluno->nome = 'Seleide';
    $aluno->email = 'se@hotmail.com';

    $professor = new Professor('Carlitos', 'ca@hotmail.com', 'ADS');
?>