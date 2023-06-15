<?php


//Todo: Interfaces: 

//* Una interfaz es una estructura que define todos los métodos que debe utilizar una clase. Es como un "contrato" que especifica los nombres de los métodos sin especificar como se implementan. ej:

    interface MiContrato{
        public function tarea1();
        public function tarea2(); 

    }

    //! De manera más gráfica podemos observar el siguiente ejemplo:

    interface Figura{
        public function calcularArea();
    }

    //? En vez de utilizar la palabra reservada para la herencia se utiliza "implements".
    class Circulo implements Figura{
        
        public function __construct(private $radio){
            $this->radio = $radio;
        }
        public function calcularArea(): void{
            echo "AREA CIRCULO: ".pi()*pow($this->radio, 2);
        }
    }

    $circulo = new Circulo(5);
    $circulo->calcularArea();


    //* Cabe aclarar que si se puede hacer herencia de interfaces utilizando la pablabra clave extends, esto sirve para agregar nuevos métodos a interfaces ya existentes.

    //Un ejemplo es esto es el siguiente 

    interface Figura3D extends Figura {
        public function calcularVolumen();
    }

    
    class Cuadrado implements Figura3D{
        
        public function __construct(private $lado){
            $this->lado = $lado;
        }
        public function calcularArea(): void{
            echo "<br><br> AREA CUADRADO: ". 6* pow($this->lado, 2)."<br><br>";
        }
        public function calcularVolumen(): void{
            echo "VOLUMEN CUADRADO: ".pow($this->lado, 3);
        }
    }

    $cuadrado = new Cuadrado(5);
    $cuadrado->calcularArea();
    $cuadrado->calcularVolumen();

?>
