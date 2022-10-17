<?php

//Crear una función que reciba 3 parámetros:
// (número1, número2, operación a realizar)
//dicha función tiene que devolver 
//el resultado pero no imprimirlo

function calculadora($valor1, $valor2, $operacion){

    switch ($operacion) {
        case '+':
            $resultado = $valor1 + $valor2;
            break;
        case '-':
            $resultado = $valor1 - $valor2;
            break;
        case '*':
            $resultado = $valor1 * $valor2;
            break;
        case '/':
            $resultado = $valor2==0?"no se puede dividir entre 0": $valor1 / $valor2;
            break;

        default:
            $resultado = "No se reconoce la operación";
            break;
    }

    return $resultado;

}

echo(calculadora(3,0,"/"));