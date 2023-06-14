<?php


class Persona{
    private static $nombreAux;
    public function __construct(private $nombre, protected int $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        self::$nombreAux = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public static function saludar(){
        return "Hola ". self :: $nombreAux;
    }
}
