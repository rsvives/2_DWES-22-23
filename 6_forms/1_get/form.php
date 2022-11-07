<?php
/*
Login básico:
definir dos constantes:
    - nombre usuario
    - contraseña
Comparar los valores recibidos por el formulario con 
las constantes definidas
En caso de que ambas coincidan, mostrar un mensaje:
"Bienvenido $nombre_usuario"

*/

define("NOMBREUSUARIO", "pepe");
define("CONTRASEGNA", "contrasegnasegura");

$usuario = $_GET["nombre"];
$contrasegna = $_GET["pass"];

if(empty($usuario)||empty($contrasegna)){
    //si está vacío -> pedir parámetros de nuevo
    echo("Credenciales vacías. Por favor, revisa el formulario");

}else{
    //comprobar credenciales
    if($usuario == NOMBREUSUARIO && $contrasegna == CONTRASEGNA){
        echo("Bienvenido " . $usuario);
    }else{
        echo("Error de credenciales");
    }
}




// var_dump($_GET);



?>