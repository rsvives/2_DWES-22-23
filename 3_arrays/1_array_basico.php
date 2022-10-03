<?php

$listaCompra = array("pan","café","huevos","cereales","leche");
$listaCompra2 = ["pan","café","huevos","cereales","leche"];

print_r($listaCompra2);
echo("<br>");

echo($listaCompra[1]);
echo("<br>");

$listaCompra3[]="pan";
print_r($listaCompra3);
echo("<br>");

$elementos = count($listaCompra);
echo($elementos);
echo("<br>");

for ($i=0; $i <count($listaCompra) ; $i++) { 
    echo($listaCompra[$i]."<br>");
}

foreach ($listaCompra as $element) {
    echo("$element <br>");
}