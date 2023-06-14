<?php

//Todo: Clases

//*es una plantilla que nos permite definir las características y comportamientos de los objetos que se pueden crear a partir de dicha clase

//! Instanciar una clase es de lo más sencillo del mundo

// se define una variable $objeto a crear y se utiliza la palabra reservada "new" se le pone el nombre de la clase y los parámetros necesarios en caso de ser requeridos.

//* exp: $persona = new Persona("David", 22);

//? Una vez instanciada una clase puedo acceder a los métodos y atributos de ella 

//* exp: $persona->show_name(); //En el caso de que esta función fuera la que me permite conocer el nombre de mi objeto.



class Persona{
    public function __construct(private $nombre, protected int $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
}

$persona = new Persona("David", 22);
$miNombre = $persona->getNombre();
echo $miNombre; 
?>
