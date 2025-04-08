<?php

    $animais = [
        'animal1' => [
            'nome' => 'Pipoca',
            'raca' => 'Ave',
            'especie' => 'Corvo',
            'cor' => 'Preto',
            'peso' => '5kg',
            'idade' =>'20 anos',
            'foto' => 'https://i.pinimg.com/originals/19/85/82/1985827670c2f568eb3ee9623d75ebd8.jpg',

        ],
        'animal2' => [
            'nome' => 'Zephyrion',
            'raca' =>'Rabo-Córneo Hungaro',
            'especie' => 'Dragão',
            'cor' =>'Preto',
            'peso' => '987kg',
            'idade' =>'67anos',
            'foto' => 'https://pm1.aminoapps.com/6311/5fb39066b693721a5ac7e277d3c5cff939459008_00.jpg',

        ],
        'animal3' => [
            'nome' => 'Raivoso',
            'raca' =>'Cão de três cabeças',
            'especie' => 'cachorro',
            'cor' =>'preto',
            'peso' => '600kg',
            'idade' =>'19anos',
            'foto' => 'https://pm1.aminoapps.com/6356/9e6c76d7cd6800a7c0c4f00918bcd1d3d08b52a6_00.jpg',

        ],
        'animal4' => [
            'nome' => 'Bombardeiro',
            'raca' =>'creeper',
            'especie' => 'hostil',
            'cor' =>'verde',
            'peso' => '50kg',
            'idade' =>'2meses',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_Jwf92DZWZ_yqM2tZ06bh5nfUa0dLnfseFw&s',

        ]
    ];

    foreach ($animais as $key => $value) {

        echo "<br>Nome: " . $value['nome'];
        echo "<br>Raça: " . $value['raca'];
        echo "<br>Espécie: " . $value['especie'];
        echo "<br>Cor: " . $value['cor'];
        echo "<br>Peso: " . $value['peso'];
        echo "<br>Idade: " . $value['idade'];
        echo "<br><img src='" . $value['foto'] . "' width='200' height='200'>";
        echo "<hr>";

    }



?>