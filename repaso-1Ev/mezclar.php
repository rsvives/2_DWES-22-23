<?php

$primer_numero = 340;
$segundo_numero = 244;

// $array_numeros = str_split($primer_numero . $segundo_numero);
// shuffle($array_numeros);

// foreach ($array_numeros as $numero) {
//     echo "$numero ";
// }

$array_primer_numero = str_split($primer_numero);
$array_segundo_numero = str_split($segundo_numero);
$array_shuffle = [];

for ($i = 0; $i < count($array_primer_numero); $i++) {
    array_push($array_shuffle, $array_primer_numero[$i]);
    array_push($array_shuffle, $array_segundo_numero[$i]);
}

function mostrar_numeros($array_shuffle, $primer_numero, $segundo_numero)
{
    echo "primer numero: $primer_numero <br>";
    echo "segundo numero: $segundo_numero <br>";
    echo "numero mezclado: ";
    foreach ($array_shuffle as $numeros) {
        echo ("$numeros ");
    }
}

mostrar_numeros($array_shuffle, $primer_numero, $segundo_numero);
