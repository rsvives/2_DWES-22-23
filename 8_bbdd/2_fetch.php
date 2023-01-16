<?php

$bd = new PDO("mysql:host=localhost:3307;dbname=dwes", "root", "");
$resultados = $bd->query("SELECT * FROM Usuarios");

while ($row = $resultados->fetch(PDO::FETCH_LAZY)) {
    // echo "id: ". $row['id'] . " nombre: " . 
    print("<pre>" . print_r($row, true) . "</pre>");
}
