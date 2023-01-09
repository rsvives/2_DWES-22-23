<?php

function par_impar($numero)
{
    if ($numero % 2 == 0) {
        echo ("el número es par");
    } else {
        echo ("el número es impar");
    }
}


if (!empty($_POST['numero'])) {
    $numero_envio = $_POST['numero'];

    par_impar($numero_envio);
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

    <form action="par_impar.php" method="post">

        <label for="numero">Introduzca número</label>
        <input type="number" name="numero" id="numero"><br>

        <input type="submit" value="enviar">

    </form>
</body>

</html>