<?php

$num1 = 2 ;
$num2 = 5 ;
$num3 = "2";

$igualdad = $num1 == $num2;
$mayor = $num1 > $num2;
$menor = $num1 < $num2;
$mayorIgual = $num1 >= $num2;
$menorIgual = $num1 <= $num2;
$comparacion = $num1==$num3;
$comparacionEstricta = $num1===$num3;
$desigualdad = $num2!=$num3;
$desigualdadEstricta = $num2!==$num3;

$estaPulsado = true;
$estaApagado = false;

// echo("esta pulsado: $estaPulsado");
echo("Num1: $num1");
echo("<br>");
echo("Num2: $num2");
echo("<br>");
echo("Num3: $num3");
echo("<br>");
echo("<br>");

echo("Igualdad: $igualdad");
echo("<br>");
echo("Mayor: $mayor");
echo("<br>");
echo("Menor: $menor");
echo("<br>");
echo("MayorIgual: $mayorIgual");
echo("<br>");
echo("MenorIgual: $menorIgual");
echo("<br>");
echo("<br>");
echo("Comparacion: $comparacion");
echo("<br>");
echo("ComparacionEstricta: $comparacionEstricta");
echo("<br>");
echo("Desigualdad: $desigualdad");
echo("<br>");
echo("DesigualdadEstricta: $desigualdadEstricta");