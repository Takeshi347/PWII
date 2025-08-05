<?php

    class Forma{
        public function desenhar(){
            echo 'Desenhando uma forma';
        }
    }

    class Circulo extends Forma{
        public function desenhar(){
            echo 'Desenhando um círculo <br>';
        }
    }

    class Quadrado extends Forma{
        public function desenhar(){
            echo 'Desenhando um quadrado<br>';
        }
    }

    $circulo = new Circulo();
    $quadrado = new Quadrado();


    $circulo->desenhar();
    $quadrado->desenhar();

?>