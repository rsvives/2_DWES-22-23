<?php

$visitas = $_COOKIE["visitas"];

if (empty($visitas)) {
    setcookie("visitas", 1);
    header("location:./index.php");
} else {
    setcookie("visitas", $_COOKIE["visitas"] + 1);
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
    <h1>Veces visitada la página: <?= $visitas ?></h1>

    <form action="./borrarCookie.php" method="post">
        <input type="submit" value="Borrar cookies">
    </form>

</body>

</html>