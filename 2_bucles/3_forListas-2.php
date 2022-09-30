<?php

echo("<h1>Tablas de multiplicar</h1>");
echo("<ul>");

define("TABLA", 2);
for ($i=0; $i <= 10 ; $i++) { 
    echo("<li>".TABLA . " x " . $i ."=". TABLA* $i . "</li>");
}

echo("</ul>");