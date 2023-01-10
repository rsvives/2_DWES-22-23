<?php


function cifrado($palabra, $offset)
{
    $abecedario = "abcdefghijklmnñopqrstuvwxyz";
    for ($i = 0; $i < strlen($abecedario); $i++) {
        if ($abecedario[$i] == "a") {
            $resultado = $abecedario[$i + $offset];
        }
    }
    echo ($resultado);
}

cifrado("", 4);
