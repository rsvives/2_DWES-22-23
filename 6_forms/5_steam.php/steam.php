<?php

$juegosJSON = file_get_contents("./juegos.json");
$juegosArray = $juegosJSON == null ? [] : json_decode($juegosJSON, true, 512, JSON_UNESCAPED_UNICODE);

if (!empty($_POST)) {
    $juegoIntroducido = $_POST;
    array_push($juegosArray, $juegoIntroducido);
}

file_put_contents("./juegos.json", json_encode($juegosArray, JSON_UNESCAPED_UNICODE));

$vacio = $juegosArray == [] ? true : false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam 🎮</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="games-container <?= $vacio ? 'j-content-center' : '' ?> ">
        <?php if ($vacio) { ?>
            <span>No hay juegos</span>
        <?php } else { ?>
            <?php foreach ($juegosArray as $key => $juego) { ?>

                <div class="game">
                    <span class="game-id"><?= $key + 1 ?></span>
                    <span class="game-title"><?= $juego['title'] ?></span>
                    <span class="year"><?= $juego['year'] ?></span>
                </div>

            <?php } ?>
        <?php } ?>

    </div>

    <div class="formulario">
        <form action="./steam.php" method="post">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <label for="year">Year:</label>
            <input type="text" id="year" name="year" required>
            <input type="submit" value="Enviar" class="button-submit">
        </form>
    </div>
</body>

</html>