<?php

class Pasajero{
    
    //ATRIBUTOS
    private $nombre;
    private $apellido;
    private $numDocumento;

    //MÉTODO CONSTRUCTOR, SE ENCARGA DE CONSTRUIR NUESTRO OBJETO
    function __construct($nombre, $apellido, $numDocumento) {
    	$this->nombre = $nombre;
    	$this->apellido = $apellido;
    	$this->numDocumento = $numDocumento;
    }

    //MÉTODO GET, QUE SE ENCARA DE OBTENER EL VALOR DE UN ATRIBUTO Y MOSTRARLO
    public function getNombre() {
    	return $this->nombre;
    }

    public function getApellido() {
    	return $this->apellido;
    }

    public function getNumDocumento() {
    	return $this->numDocumento;
    }

    //MÉTODO SET, QUE SE ENCARGA DE MODIFICAR LOS VALORES DE LOS ATRIBUTOS
    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function setApellido($apellido) {
    	$this->apellido = $apellido;
    }

    public function setNumDocumento($numDocumento) {
    	$this->numDocumento = $numDocumento;
    }

    //MÉTODO TO STRING QUE IMPRIME EN PANTALLA NUESTRO OBJETO CON SUS ATRIBUTOS
    public function __toString(){
        $cadena = "\nNOMBRE: " . $this->getNombre()."|". 
                  " APELLIDO: " . $this->getApellido()."|".
                  " NUMERO DE DOCUMENTO: " . $this->getNumDocumento()."|";
        return $cadena;
    }
}