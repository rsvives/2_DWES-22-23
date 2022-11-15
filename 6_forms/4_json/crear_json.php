<?php

$juego=[
    "titulo"=>"cookie clicker",
    "anio"=>2013,
    "pais"=>"Francia",
    "motor"=>"JS",
    "estudio"=>"franchutes"
];
// var_dump($juego);

$json = json_encode($juego,JSON_UNESCAPED_UNICODE);

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
    <h1>Hola mundo</h1>
    <script>
        let juego = <?= $json ?>;
        console.log(juego);

        console.log("El nombre del juego es: " + juego['titulo'])
    </script>
</body>
</html>

