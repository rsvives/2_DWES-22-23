<?php
//funcion suma con echo
function sumaEcho($n1,$n2){
    $resultado = $n1+$n2;
    echo "el resultado de $n1+$n2 es $resultado <br>";
}

sumaEcho(1,2);


//funcion suma con return
function sumaReturn($n1,$n2){
    return 1+2;
}
echo "el resultado es: ".sumaReturn(1,2) ."<br>";

//funcion suma anónima

$suma= function ($num1, $num2){
    echo("el resultado es ".$num1+$num2."<br>");
};

$suma(1,3);
// function sumaAnonima($n1,$n2){}

//funcion suma flecha
// function sumaFlecha($n1,$n2){}

$funcionFlecha = fn($a,$b) => $a + $b;
echo("El resultado es: ".$funcionFlecha(3,2));

$funcionFlecha2 = fn($a,$b) => $a + $b;

