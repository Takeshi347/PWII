<?php
    $pessoa = [
    'nome' => 'Amaurizin',
    'sobrenome' => 'Verdinho Marciano',
    'idade' => 60
];

    $funcionarios = [
        'pessoa1' => [
            'nome' => 'Hipaminondas',
            'sobrenome' => 'Silva',
            'idade' => 20
        ],
        'pessoa2' => [
            'nome' => 'Seleleide',
            'sobrenome' => 'Silva',
            'idade' => 28
        ],
        'pessoa3' => [
            $pessoa
        ]
    ];

    echo '<pre>';
    echo var_dump($funcionarios);
    echo $funcionarios['pessoa1']['nome'];
?>