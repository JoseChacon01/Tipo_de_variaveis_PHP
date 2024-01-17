<?php

    $a = 50;

    function soma() {
        global $a; //Trazenso o valor da variável definida de maneira global fora da função para dentro da função.
        $x = $a + 40;
        return $x; 
    }

    echo soma(); //Precisa "imprimir" a função e não $x.

?>