<?php


function porDos ($num){
    return $num*2;
}


define("MAX",100);
$numbers=[];

for ($i=0; $i<=MAX-1 ; $i++) { 
    $numbers[$i]=$i+1;
}



$doble = array_map("porDos",$numbers);
print_r($numbers);
echo"<br>";
print_r($doble);


//crear un array de 3 personas
// cada persona está compuesta por nombre y una edad






