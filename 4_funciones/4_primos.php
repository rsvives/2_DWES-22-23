<?php

// define("MAXIMO",100);

// echo("<ol>");
// for($i=1;$i<=MAXIMO;$i++){
//     if(primo($i)){
//         echo("<li>es primo</li>");
//     }else{
//         echo("<li>no es primo</li>");
//     }
// } 
// echo("</ol>");


function primo($num){
    $cont=0;
    for($i=2;$i<=$num;$i++){
        if($num%$i==0){
            $cont++;
        }
    }
    if($cont==1){
        return true;
    }else{
        return false;
    }
}


//1.Crear una página html con un h1 
//2. Definir un límite máximo de números a calcular y mostrarlo con
//una etiqueta p 
//3.Crear una lista numerada en la que se indique 
//si cada uno de los elementos es primo o no
//4.Hacer el cálculo con una función
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
    <ol>

    <?php
    define("MAX",100);
    
    for($i=1;$i<=MAX;$i++){
        if(primo($i)||$i==1){
            echo"<li>es primo</li>";
        } else{
            echo"<li>no</li>";
        }
    }
    ?>
    </ol>
    
</body>
</html>

