<?php
 class ResponsableV{

   //ATRIBUTOS
   private $numEmpleado;
   private $numLicencia;
   private $nombre;
   private $apellido;
    
   //MÉTODO CONSTRUCTOR, SE ENCARGA DE CONSTRUIR NUESTRO OBJETO
   function __construct($numEmpleado, $numLicencia, $nombre, $apellido) {
   $this->numEmpleado = $numEmpleado;
   $this->numLicencia = $numLicencia;
   $this->nombre = $nombre;
   $this->apellido = $apellido;
    
   }

   //MÉTODO GET, QUE SE ENCARA DE OBTENER EL VALOR DE UN ATRIBUTO Y MOSTRARLO
   public function getNumEmpleado() {
      return $this->numEmpleado;
   }

   public function getNumLicencia() {
      return $this->numLicencia;
   }

   public function getNombre() {
      return $this->nombre;
   }

   public function getApellido() {
   return $this->apellido;
   }

   //MÉTODO SET, QUE SE ENCARGA DE MODIFICAR LOS VALORES DE LOS ATRIBUTOS
   public function setNumEmpleado($numEmpleado) {
      $this->numEmpleado = $numEmpleado;
   }

   public function setNumLicencia($numLicencia) {
      $this->numLicencia = $numLicencia;
   }

   public function setNombre($nombre) {
      $this->nombre = $nombre;
   }

   public function setApellido($apellido) {
      $this->apellido = $apellido;
   }

   //MÉTODO TO STRING QUE IMPRIME EN PANTALLA NUESTRO OBJETO CON SUS ATRIBUTOS
   public function __toString(){
      $cadena = "\nNOMBRE RESPONSABLE: " . $this->getNombre()."|".
               " APELLIDO RESPONSABLE: " . $this->getApellido()."|".
               " NUMERO DE EMPLEADO: " . $this->getNumEmpleado()."|".
               " NUMERO DE LICENCIA: " . $this->getNumLicencia()."|" ;
      
      return $cadena;
   }
 }