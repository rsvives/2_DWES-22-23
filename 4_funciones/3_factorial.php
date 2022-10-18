<?php
//Factorial simple:
//crear una función que permita calcular 
//el factorial de cualquier número
function factorial($num){
    $resultado=1;
    for ($i=1; $i <= $num ; $i++) { 
        $resultado=$resultado*$i;
    }
    return $resultado;
}
echo(factorial(5). "<br>");



// echo 2**3;

// $combinaciones = ((factorial(8))*(3**8)*(factorial(12))*(2**12))/12;
// $longitudCM = $combinaciones*10;
// $longitudKM = $longitudCM/100000;
// $añoLuz = 300000 *3600*24*365;

// $distanciaAñosLuz = $longitudKM / $añoLuz;

// echo $distanciaAñosLuz;



//Factorial completo:
//funcion que muestre tanto el resultado como
//la multiplicación de todos los números que componen el factorial.
//Ej: factorial_completo(5) 👉 5! = 5x4x3x2x1 = 120 
function factorialCompleto($numero){
    $factorial = 1;
    echo($numero ."! = ");
    for ($i=1; $i <$numero ; $i++) { 
        $factorial = $factorial * ($i+1);
        if ($i == $numero - 1) {
            echo($i . " X ". $i + 1);
        } else {
            echo($i . " X "  );
        }
    
    }
    echo" = $factorial";
}

echo(factorialCompleto(5));



//Factorial recursivo:
//función que devuelva el resultado del factorial,
//pero calculado con una función recursiva

$numero=5;

function factorial_r($numero){
    if($numero>1){
        $resultado=$numero*factorial_r($numero-1);

    }else{
        $resultado=$numero;
    }
    return $resultado;
};

echo("El número es: ".$numero. "Y su factorial es: ".factorial_r($numero));
echo("<br>");

function factioral_r2($num){
    if ($num ==1) {
        return 1;
    }else{
        return $num * factioral_r2($num-1);
    }
}

echo(factioral_r2(5));
echo("<br>");

function factorial_r3($num){
    return $num==1?1:$num*factorial_r3($num-1);
}

echo("factorial ". factorial_r3(5));
echo("<br>");