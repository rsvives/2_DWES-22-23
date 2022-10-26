<?php
$array = [3,6,8,5,6,9];

$array2 = [
    "paco"=>8,
    "marta"=>10,
    "miguel"=>4
];

$array2["marta"];

function mayorQueCinco($num){
    if($num>5){
        return true;
    }else{
        return false;
    }
}

// $nuevoArray = array_filter($array,"mayorQueCinco");
// $nuevoArray = array_filter($array,fn($num)=>$num>5?true:false);

// print_r($array);
// echo "<br>";
// print_r($nuevoArray);

$array_bidim = [
    ["base"=>2,"altura"=>9],
    ["base"=>4,"altura"=>7],
    ["base"=>8,"altura"=>5],
];


//filtrar los elementos cuya base sea menor que 4

function filtroBaseMenorQue4($elem){
    if($elem["base"]<4){
        return true;
    }else{
        return false;
    }
}

// $array_bidim_filtrado=array_filter($array_bidim,"filtroBaseMenorQue4");
$array_bidim_filtrado = array_filter($array_bidim,fn($elem)=>$elem["base"]<4?true:false);

print_r($array_bidim);
echo "<br>";
print_r($array_bidim_filtrado);
echo "<br>";