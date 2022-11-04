<?php

/**
 * Clase persona
 * Propiedades:
 *  - nombre
 *  - altura
 *  - peso
 *  - patrimonio
 * 
 * Métodos:
 *  -construct
 *  -getters y setters
 *  -toString
 *  -saludar -> necesita el nombre de otra persona, echo "Hola menganita"
 *              si no le paso ningún nombre, echo "Hola desconocid@"          
 */

/**
 * Clase trabajador
 * Propiedades:
 *  -Sueldo
 *  -Empresa
 * 
 * Métodos:
 *  -construct
 *  -getters y setters
 *  -toString
 *  -Cobrar
 * 
 */

 class Persona{
    private $nombre;
    private $altura;
    private $peso;
    private $patrimonio;

    
    function __construct($nombre,$altura,$peso,$patrimonio)
    {
        $this->nombre=$nombre;
        $this->altura=$altura;
        $this->peso=$peso;
        $this->patrimonio=$patrimonio;

    }
   
    public function getNombre() {
        return $this->nombre;
    }
   
    /**
    * @param $nombre
    */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
   
    public function getAltura() {
        return $this->altura;
    }
   
    /**
    * @param $altura
    */
    public function setAltura($altura) {
        $this->altura = $altura;
    }
   
    public function getPeso() {
        return $this->peso;
    }
   
    /**
    * @param $peso
    */
    public function setPeso($peso) {
        $this->peso = $peso;
    }
   
    public function getPatrimonio() {
        return $this->patrimonio;
    }
   
    /**
    * @param $patrimonio
    */
    public function setPatrimonio($patrimonio) {
        $this->patrimonio = $patrimonio;
    }
    /**
     * @return string
     */

    public function __toString() {
        return "Nombre: {$this->nombre}, Altura: {$this->altura}, Peso: {$this->peso}, Patrimonio: {$this->patrimonio}";
    }

    function Saludar($nombre="Desconocido"){
        echo "hola $nombre";
    }
    
 }
 $persona=new Persona("","190","90",10000);
 
 echo($persona->__toString());
 $persona->Saludar("Paco");

 class Trabajador extends Persona{
    //  private $propiedad;
    protected $empresa;
    protected $salario;
     
      function __construct($nombre,$altura,$peso,$patrimonio,$empresa,$salario)
      {
         parent::__construct($nombre,$altura,$peso,$patrimonio);
         $this->empresa = $empresa;
         $this->salario = $salario;
     }

    public function getEmpresa() {
    	return $this->empresa;
    }

    /**
    * @param $empresa
    */
    public function setEmpresa($empresa) {
    	$this->empresa = $empresa;
    }

    public function getSalario() {
    	return $this->salario;
    }

    /**
    * @param $salario
    */
    public function setSalario($salario) {
    	$this->salario = $salario;
    }

    /**
     * @return string
     */
    public function __toString() {
    	return parent::__toString() . "Empresa: {$this->empresa}, Salario: {$this->salario}";
    }

    public function cobrar(){
        $this->setPatrimonio($this->getPatrimonio() + $this->getSalario());
    }


 }
 echo("<br>");
 $trabajador=new Trabajador("Sonia","190","90",10000,"",1200);
 echo("Antes de cobrar".$trabajador->getPatrimonio());
 echo("<br>");
 $trabajador->cobrar();
 echo($trabajador->getPatrimonio());
 echo("<br>");
 $trabajador->cobrar();
 echo($trabajador->getPatrimonio());
