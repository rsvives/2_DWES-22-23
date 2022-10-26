<?php

/**
 * 
 * 
 * Clase cuadrado:
 * 
 * Propiedades: lado, color, área
 * Métodos: constructor, getters, setter, to String
 * 
 * 
 */

 class Cuadrado{

    private $lado;
    private $color;
    private $area;

    function __construct($lado=2,$color='rojo')
    {
        $this->lado = $lado;
        $this->color = $color;
        $this->area = $this->lado**2;
    }

    /**
     * Get the value of lado
     */ 
    public function getLado()
    {
        return $this->lado;
    }

    /**
     * Set the value of lado
     *
     * @return  self
     */ 
    public function setLado($lado)
    {
        $this->lado = $lado;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Get the value of area
     */ 
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     *
     * @return  self
     */ 
    public function setArea($area)
    {
        $this->area = $area;
    }

    function __toString()
    {
        return "Este objeto es un: " .get_class($this)." lado: $this->lado color: $this->color área: $this->area";
    }

    public function saludar(){
        echo "hola mundo!";
    }

 }

 $cuadrado1 = new Cuadrado(2,"rojo");

// echo $cuadrado1;

echo"El lado es". $cuadrado1->getLado();
echo "<br>";

$cuadrado1->setLado(3);

echo"El lado es". $cuadrado1->getLado();
echo "<br>";

$cuadrado1->saludar();