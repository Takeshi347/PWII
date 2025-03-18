<?php

    $veiculos = [
        'Fusca',
        'Ferrari',
        'Uno'
    ];

    foreach ($veiculos as $key => $value) {
        echo 'Chave: ' . $key . '<br>';
        echo 'Veículo: ' . $value . '<br>';
    }

    $estacionamento = [
        [
            'nome' => 'Fusca',
            'placa' => 'abc123',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg5ZMlMFmNhV12Hvmq1AfmCfyA2hrzBWEi3w&s'
        ],
        [
            'nome' => 'Uno',
            'placa' => 'yxz321',
            'foto' => 'https://down-br.img.susercontent.com/file/57824a8bbbb60802ad31835ec1e0b185_tn'
        ]
    ];

        echo '<h1>Estacionamento Batida Feliz</h1>';
        foreach ($estacionamento as $key => $veiculo) {
            echo 'Veiculo:' . $veiculo['nome'] . '<br>';
            echo 'Placa:' . $veiculo['placa'] . '<br>';
            echo '<img src="'. $veiculo['foto'] . '">';
            echo '<hr>';
    }
?>