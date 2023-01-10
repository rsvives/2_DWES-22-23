<?php

function hacerPalindromo($string)
{
    $auxiliar = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $auxiliar .= $string[$i];
    }
    return strtolower($auxiliar);
}

$resultado = hacerPalindromo('Hola Mundo');
echo "<p style = 'text-transform: capitalize';> $resultado </p>";
