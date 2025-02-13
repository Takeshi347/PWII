<?php
    /**
     * Crie um script que irá receber
     * uma idade e exiba se é:
     * criança
     * adolescente
     * adulto
     * idoso
     */

     $idade = 100;

     $crianca = $idade < 12;
     $adolescente = $idade >= 12 && $idade < 18;
     $adulto = $idade >= 18 && $idade < 60;

     if ($crianca)
        echo "É Criança";
    if ($adolescente)
        echo "É Adolescente";
    if ($adulto)
        echo "É Adulto";
    else
        echo "É Idoso";


        $response = "Idoso";

        if ($idade < 12)
            $response = "criança";
        else if ($idade < 18)
            $response = "Adolescente";
        else if ($idade < 60)
            $response = "Adulto";
        
        echo $response;




        $idade_de_crianca = 12;

        .....

        
        if ($idade < $idade_de_crianca )
        ...
        if ($p = "ca")


?>