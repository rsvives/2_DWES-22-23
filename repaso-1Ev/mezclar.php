<?php

$primer_numero = 340;
$segundo_numero = 244;

// $array_numeros = str_split($primer_numero . $segundo_numero);
// shuffle($array_numeros);

// foreach ($array_numeros as $numero) {
//     echo "$numero ";
// }

$array_primer_numero = str_split($primer_numero);
$array_segundo_numero = str_split($segundo_numero);
$array_shuffle = [];

for ($i = 0; $i < count($array_primer_numero); $i++) {
    array_push($array_shuffle, $array_primer_numero[$i]);
    array_push($array_shuffle, $array_segundo_numero[$i]);
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
    <p style="background-color: green; ">
        primer numero: <?= $primer_numero ?>
    </p>
    <p style="background-color: yellow;">
        segundo numero: <?= $segundo_numero ?>
    </p>
    <?php
    foreach ($array_shuffle as $key => $numeros) {
        if ($key % 2 == 0) { ?>
            <span style="background-color: green;"><?= $numeros ?></span>
        <?php }
        if ($key % 2 != 0) { ?>
            <span style="background-color: yellow;"><?= $numeros ?></span>

    <?php }
    }
    ?>
</body>

</html>