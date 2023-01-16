<?php

/**
 * 
 * USUARIOS
 * 
 * id
 * nombre
 * email
 * password
 * direccion
 * tarjeta_credito
 * 
 */

$bd = new PDO("mysql:host=localhost:3307;dbname=dwes", "root", "");
$resultados = $bd->query("SELECT * FROM Usuarios");

// echo "los resultados encontrados: " . $resultados->rowCount();

foreach ($resultados as $row) {
    // print("<pre>" . print_r($row, true) . "</pre>");
    echo "el usuario con id " . $row["id"] . " es: " . $row["nombre"] . " | " . $row["email"] . "<br>";
}


//usuarios con id mayor que 2
//usuarios cuyo nombre contiene la "a"


$resultadosID = $bd->query("SELECT * FROM Usuarios where id > 2");
foreach ($resultadosID as $key => $value) {
    echo "<pre>" . print_r($value, true) . "</pre>";
}

$resultadosNombre = $bd->query("SELECT * FROM Usuarios where nombre like '%a%'");
foreach ($resultadosNombre as $key => $value) {
    echo "<pre>" . print_r($value, true) . "</pre>";
}
