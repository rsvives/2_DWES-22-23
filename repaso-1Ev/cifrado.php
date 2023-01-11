<?php


function cifrado($palabra, $offset)
{
    $alfabeto = "abcdefghijklmnñopqrstuvwxyz";
    $arrayAlfabeto = str_split($alfabeto);

    $arrayLetras = str_split($palabra);
    $palabraCifrada = "";

    foreach ($arrayLetras as $letra) {
        $posicionAlfabeto = null;

        foreach ($arrayAlfabeto as $posicion => $letraABC) {
            $letraCifrada = "";

            if ($letra == $letraABC) {
                $posicionAlfabeto = $posicion;
                $nuevaPosicion = $posicionAlfabeto + $offset;

                if ($nuevaPosicion > 27) {
                    $nuevaPosicion -= 27;
                }

                $letraCifrada = $arrayAlfabeto[$nuevaPosicion];
                $palabraCifrada .= $letraCifrada;

                // echo $palabraCifrada . "<br>";
            }
        }
        // echo "letra: $letra   posición alfabeto: $posicionAlfabeto  nueva pos: $nuevaPosicion  nueva letra: $letraCifrada<br>";
    }
    return $palabraCifrada;
}

echo cifrado("Hola mundo", 5);
