<?php

//crear un array con una biblioteca de juegos
//guardar el array en un fichero json
$steam = 
[
    [
    "nombre" => "zelda",
    "precio" => "200€"
    ],
    [
    "nombre" => "fortnite",
    "precio" => "2€"
    ]
];

$steamJSON = json_encode($steam,JSON_UNESCAPED_UNICODE);


//guardar archivo .json

$mensaje = (file_put_contents("steam.json",$steamJSON)? "se ha creado el json correctamente👌":"no se ha guardado el archivo ❌");

$steamDecoded = json_decode(file_get_contents("steam.json"),true,512,JSON_UNESCAPED_UNICODE);   

var_dump($steamDecoded);

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
    <script>
       let game = <?php echo($steamJSON)?>;
        console.log(game);
        game.forEach(elem => 
        {
            console.log("El nombre del juego es: " + elem['nombre']);
        });
        
    </script>
</body>
</html>