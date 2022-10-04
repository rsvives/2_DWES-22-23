<?php
//crear un array con elementos y valores 
//definidos de forma aleatoria

define("ELEMENTOS",rand(1,5));
$miArray = [
    [1,65,7,4],
    [152,5321,21,123],
    [213,21,215],
    [7,4],
];

$array1=[];
$array2=[];
for ($i=0; $i < ELEMENTOS; $i++) { 
    for ($j=0; $j < ELEMENTOS ; $j++) { 
        $array2 [$j] = rand(1,5);
    }
    $array1 [$i]= $array2;
}

//print_r($array1)



// for ($i=0; $i <ELEMENTOS ; $i++) { 
//     $miArray[$i] = rand(1,100);
// }


?>


<pre>
    <?php
        print_r($array1);
    ?>
</pre>