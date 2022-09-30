<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<body>
    <ul>
        <?php
            define("TABLA", 2);
            for ($i=0; $i <= 10 ; $i++) { 
                echo("<li>".TABLA . " x " . $i ."=". TABLA* $i . "</li>");
            }
        ?> 
    </ul>
    
</body>
</html>


