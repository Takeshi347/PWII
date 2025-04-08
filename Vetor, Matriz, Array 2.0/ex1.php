<?php
    $alunos = [
        [
            'nome' => 'Papá Pitufo',
            'rm' => '12345678',
            'telefone' => '123456',
            'foto' => 'https://i.pinimg.com/564x/c2/c9/7f/c2c97f0614837c506b5d25820988f6dc.jpg'
        ],
        [
            'nome' => 'Pitufina',
            'rm' => '12345687',
            'foto' => 'https://i.pinimg.com/736x/b3/7c/de/b37cde1f07eebec91703f5b68e1aa40d.jpg',
            'telefone' => '123432'
        ],
        [
            'nome' => 'Hosco (Ranzinza)',
            'rm' => '12354768',
            'foto' => 'https://i.pinimg.com/736x/e2/23/ca/e223ca92313ca5dcdb0df1adadc26200.jpg',
            'telefone' => '123454'
        ],
        [
            'nome' => 'Torpe (Desastrado)',
            'rm' => '12345876',
            'foto' => 'https://static.wikia.nocookie.net/smurfs/images/6/6b/Clumsy_Cartoon.jpg',
            'telefone' => '123412'
        ]
    ];

    foreach ($alunos as $key => $aluno) {
        echo 'Aluno: ' . $aluno['nome'] . '<br>';
        echo 'RM: ' . $aluno['rm'] . '<br>';
        echo 'Telefone: ' . $aluno['telefone'] . '<br>';
        if (!empty($aluno['foto'])) {
            echo '<img src="' . $aluno['foto'] . '" width="200" height="200">' . '<br>';
            echo "<hr>";
        }
    }
?>
