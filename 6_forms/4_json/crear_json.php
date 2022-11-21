<?php

$juego = [
    "titulo" => "cookie clicker",
    "anio" => 2013,
    "pais" => "Francia",
    "motor" => "JS",
    "estudio" => "franchutes"
];
// var_dump($juego);

$json = json_encode($juego, JSON_UNESCAPED_UNICODE);

//leer json
$jsonLeido = json_decode(file_get_contents("juego.json"), true, 512, JSON_UNESCAPED_UNICODE);




//guardar archivo .json
if (file_put_contents("juego.json", $json)) {
    $mensaje = "se ha creado el json correctamente👌";
} else {
    $mensaje = "no se ha guardado el archivo ❌";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página de subida de juegos en json</h1>
    <p><?= $mensaje ?></p>


    <script>
        let juego = <?= $json ?>;
        console.log(juego);

        console.log("El nombre del juego es: " + juego['titulo'])
    </script>
</body>

</html>