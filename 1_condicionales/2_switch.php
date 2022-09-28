<?php


$fecha_nacimiento=2001;

switch ($fecha_nacimiento) {
    case ($fecha_nacimiento >= 1980 && $fecha_nacimiento <1990):
        echo("eres de los años 80");
        break;
    case ($fecha_nacimiento >= 1990 && $fecha_nacimiento <2000 ):
        echo("eres de los años 90");
        break;
    case ($fecha_nacimiento >= 2000 && $fecha_nacimiento <2010 ):
        echo("eres de los años 2000");
        break;
    default:
        echo("error");
        break;
}


switch ($fecha_nacimiento) {
    case 1990:
    case '1991':    
    case '1992':    
    case '1993':   
    case '1994':
      echo("Eres de los 90");
        break;
    default:
      echo("Eres de otro año");
        break;
}
