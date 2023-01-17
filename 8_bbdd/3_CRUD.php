<?php
//Sustituir método query por exec para crear consultas que no devuelven resultados
$bd = new PDO("mysql:host=localhost:3307;dbname=dwes", "root", "");
// Insert de 3 registros
// $ejercicio1 = $bd->exec("INSERT INTO usuarios(nombre,email,passwrd,direccion,tarjeta_credito)
// VALUES('Marta','mrt@mail.com','mrtt','dir4','12341234152111234'),
//         ('Cecilia','ceci@mail.com','ceci123','dir5','4321474513214321'),
//         ('Marcos','mrc@mail.com','mrc123','dir6','123841122345678');");

// Cambiar el nombre y el email al usuario con el id 4
// $ejercicio2 = $bd->exec("UPDATE usuarios SET nombre='Laura', email='lr@gamil.com' WHERE id=4");
// Borrar todos los usuarios que contengan la letra 'e' en su nombre
$ejercicio3 = $bd->exec("DELETE FROM usuarios WHERE nombre LIKE '%e%'");
