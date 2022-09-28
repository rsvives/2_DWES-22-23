<?php
//definir un mínimo y máximo con constantes,
//generar número aleatorio entre ese rango,
//decir si es par o impar


define("MAX", 100);
define("MIN", 10);
$num = rand(MIN,MAX);
if ($num % 2 != 0) {
    echo($num . " impar");
}else{
    echo($num . " par");
}