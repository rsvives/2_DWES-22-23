<?php

/**
 * Clase triángulo
 * propiedades:base, altura, área.
 * Métodos:
 *  -construct
 *  -setters
 *  -getters
 *  -toString:
 *      Esto es un objeto de la clase ...
 *      Base: x
 *      Altura: x
 *      Área: x 
 * 
 */

 class Triangulo{
     private $base;
     private $altura;
    private $area;
    
    
    function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
        $this->calcularArea();
    }
    
    function __toString()
    {
        return "
        <pre>
            Esto es un ". get_class($this) ."
            Base: $this->base
            Altura: $this->altura
            Area: $this->area
            </pre>";
        }
    public function getBase(){
        return $this->base;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getArea(){
        return $this->area;
    }
    
    public function setBase($base){
        $this->base=$base;
        $this->calcularArea();

    }
    public function setAltura($altura){
        $this->altura=$altura;
        $this->calcularArea();
    }

    public function calcularArea(){
        $this->area = $this->base*$this->altura/2;
    }
 
 }

 //Crear una instancia, y cambiar la base
 $triangulo1 = new Triangulo(2,3);
 echo($triangulo1);
 
 $triangulo1->setBase(4);
 echo($triangulo1);

//A partir de un array con datos, crear un conjunto de instancias de Triángulos
//Añadir dichos objetos a un array


$triangulosArray = [];
$datos = [
    ["base"=>3,"altura"=>6],
    ["base"=>4,"altura"=>7],
    ["base"=>8,"altura"=>5],
];

foreach ($datos as $key => $triangulo) {
    array_push($triangulosArray,new Triangulo($triangulo["base"],$triangulo["altura"]));
}
print_r($triangulosArray);
echo"<br>";

//Filtrar los objetos del array de triánculos cuyo área mayor que x
$arrayFiltrado = array_filter($triangulosArray, fn($elem) => $elem -> getArea() > 10 ? true : false);
var_dump($arrayFiltrado);

