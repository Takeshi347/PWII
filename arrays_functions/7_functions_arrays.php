<?php
    $pessoas = [
    [
        'nome' => 'Ben',
        'idade' =>  10,
    ],

    [
        'nome' => 'Pedro',
        'idade' =>  17,
    ],
    
    [
        'nome' => 'Jubiscleu',
        'idade' =>  20,
    ],

    [
        'nome' => 'João',
        'idade' =>  80,
    ],
];

    foreach ($pessoas as $key => $value) {
        echo '<hr>';
        echo $key
    };
?>