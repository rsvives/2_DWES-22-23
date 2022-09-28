<?php

$edad = 10;
$nombre = "Paco";
$apellido = "Fernandez";

// echo($edad);
// echo("<br>");
// echo($nombre);

echo('Hola, mi nombre es '.$nombre .' '. $apellido);

$nombreApellidos ="hdkjf kdas hfkjad ";
// constantes
// define("PI", 3.141596);
// echo(PI);

$a = "Tizziano";
$b = "Hugo";
$b=$a;
$a=4;
echo("<br>");
echo("Igualación:");
echo("<br>");
echo("a:$a");
echo("<br>");
echo("b:$b");

$c = "Sonia";
$d = "Cecilia";
$d=&$c;
$c=4;
echo("<br>");
echo("Asignación:");
echo("<br>");
echo("c:$c");
echo("<br>");
echo("d:$d");