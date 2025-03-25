<?php

    $valor_1 = 10;
    $valor_2 = 10;
    $operador = '+';
    $GLOBALS['resultado'] = 0;
    
    calcular(10, 20, '+', 0);

    calcular($valor_1, $valor_2, $operador);

    function calcular($valor_1, $valor_2, $operador){
        if ($operador == '+')
        somar($valor_1, $valor_2);
        $GLOBALS['resultado'] = somar($valor_1, $valor_2);

        if ($operador == '-')
        subtrair($valor_1, $valor_2);
        $GLOBALS['resultado'] = somar($valor_1, $valor_2);

        if ($operador == '/')
        dividir($valor_1, $valor_2);
        $GLOBALS['resultado'] = somar($valor_1, $valor_2);

        if ($operador == '*')
        multiplicar($valor_1, $valor_2);
        $GLOBALS['resultado'] = somar($valor_1, $valor_2);

    }

    function somar($valor_1, $valor_2) {
        return $valor_1 + $valor_2;
    }

    function subtrair($valor_1, $valor_2) {
        return $valor_1 - $valor_2;
    }

    function dividir($valor_1, $valor_2) {
        return $valor_1 / $valor_2;
    }

    function multiplicar($valor_1, $valor_2) {
        return $valor_1 * $valor_2;
    }

    echo $valor_1 . $operador . $valor_2 . ' = ' . $GLOBALS['resultado'];

?>