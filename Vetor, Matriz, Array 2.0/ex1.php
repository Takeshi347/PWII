<?php

    $alunos = [
        [
            'nome' => 'Barack Obama',
            'rm' => '12345678',
            'telefone' => '123456',
            'foto' => 'https://www.tryparrotai.com/_next/image?url=%2F33.webp&w=256&q=75'
            
        ],
        [
            'nome' => 'Batman',
            'rm' => '12345687',
            'foto' => 'https://lojasbrilhante.vteximg.com.br/arquivos/ids/161851/Festa-do-batman.png?v=636650285001800000',
            'telefone' => '123432'
        ],
        [
            'nome' => 'Robin',
            'rm' => '12354768',
            'foto' => '',
            'telefone' => '123454'
        ],
        [
            'nome' => 'Arqueiro Verde',
            'rm' => '12345876',
            'foto' => '',
            'telefone' => '123412'
        ]
        ];
        foreach ($alunos as $key => $alunos) {
            echo 'Aluno: ' . $alunos['nome'] . '<br>';
            echo 'RM: ' . $alunos['rm'] . '<br>';
            echo 'Telefone: ' . $alunos['telefone'] . '<br>';
            echo '<img src="'. $alunos['foto'] . '">' . '<br>';
        }
?>