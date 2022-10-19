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

$personas = [
    ["nombre"=>"Juan","edad"=>18],
    ["nombre"=>"Francisco","edad"=>19],
    ["nombre"=>"Marta","edad"=>16],
    ["nombre"=>"Maria","edad"=>15],
    ["nombre"=>"José","edad"=>17],
    ["nombre"=>"Chus","edad"=>21],
];

$estudiantes = array_map("addCiclo",$personas);

function addCiclo($persona){
    $persona["ciclo"] = "DAW";
    return $persona;
}

//funcion menor de edad:
//añade una clave "mayorEdad" = true si la edad es >= 18
//añade una clave "mayorEdad" = false si la edad es < 18

//modificar array de personas con dicha función (map)

//sacar a los menores de edad con un filter


function menorEdadMap ($persona){
    if($persona["edad"]<18){
        $persona["mayorEdad"] = "no";
    }else{
        $persona["mayorEdad"] = "si";
    }

    return $persona;
    
}

$personas_mayores_menores = array_map("menorEdadMap",$personas);

print_r($personas_mayores_menores);


