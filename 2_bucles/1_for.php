<?php

for ($i=1; $i <= 10; $i++) { 
    echo($i);
}

//definir un número con constante
//sacar por pantalla la tabla de multiplicar de dicho número
//Ej: 4 x 1 = 4
//Ej: 4 x 2 = 8
//Ej: 4 x 3 = 12

echo("<br>");
define("TABLA", 2);
for ($i=0; $i <= 10 ; $i++) { 
    echo(TABLA . " x " . $i ."=". TABLA* $i. "<br>");
}