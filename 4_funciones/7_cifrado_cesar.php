<?php
//Crear función que codifique una palabra:
    //args: string, offset
    //descripción:
    //descompone la palabra con str_split
    //itera sobre el array de caracteres
    //los covierte a ascii, 
    //le suma el offset,
    //convierte de vuelta a caracter


// $letra = "A";


// $palabra = "password";
// $array_char = str_split($palabra);

// echo"la letra $letra es en ASCII: " . ord($letra) ."<br>";
// echo "La letra era: " . chr(ord($letra));


// foreach ($array_char as $key => $value) {
//     echo $value . "<br>";
// }



function encoder($texto, $offset){
    $array_caracteres = str_split($texto);

    $array_encoded = array_map(fn($el)=>chr(ord($el)+$offset),$array_caracteres);
    $texto_encoded = implode($array_encoded);
    return $texto_encoded;
}


echo(encoder("hola mundo",5));