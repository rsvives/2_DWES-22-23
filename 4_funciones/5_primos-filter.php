<?php
//crear un array con los números del 1 al 100

define("MAX",100);
$numbers=[];

for ($i=0; $i<=MAX-1 ; $i++) { 
    $numbers[$i]=$i+1;
}


print_r($numbers);

function par ($num){
    if ($num % 2 == 0) {
        return true;
    }
}

function esPrimo($num){
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

echo"<br>";
$arrayPares = array_filter($numbers,"par");
$arrayPrimos = array_filter($numbers, "esPrimo");
echo"Pares:";
print_r($arrayPares);
echo"<br>";
echo"Primos:";
print_r(array_values($arrayPrimos) );

