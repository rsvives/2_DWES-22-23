<?php

$bd = new PDO("mysql:host=localhost:3307;dbname=dwes", "root", "");

$resultado = $bd->query("SELECT * FROM Usuarios");
