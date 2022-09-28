<?php


$interruptor = "off";

if ($interruptor==="on") {
    echo("está encendido");
}else if($interruptor==="off"){
    echo("está apagado");
}else {
    echo ("es el interruptor de Schrodinger");
}


$resultado = $interruptor=="on"?"está encendido":"está apagado";
echo("<br>");
echo($resultado);
