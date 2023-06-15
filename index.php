<?php



//Todo: CLASES ABSTRACTACTAS

//? Una clase abstracta es una clase que no se puede instanciar directamente. Sirve más bien como una plantilla o base para otras clases. Sirve para definir una estructura común y los métodos deben implementarse en las clases hijas.

//! Para definir una clase abstracta se utiliza la palabra clave "abstract" antes de la declaración de la clase. 


//TODO: Métodos abstractos: 

//? Una clase abstracta puede contener métodos abstractos, también se utiliza la palabra clave abstract antes. Son métodos que no tienen implementación en la clase abstracta, deben ser implementados en las clases hijas. La declaración de un método abstracto no incluye el cuerpo del método. exp:

abstract class ClaseAbstracta {
    abstract public function metodoAbstracto();
}

//TODO: Herencia abstracta:

//? Las clases hijas de una clase abstracta deben implementar todos los métodos abstractos definidos en la clase abstracta. Si una clase hija llega a no implementar todos los métodos abstractos, DEBE SER DECLARADA TAMBIÉN COMO ABSTRACTA, por lo que no puede ser instanciada y deberá ser heredada nuevamente por otra clase. UNA CLASE HIJA PUEDE EXTENDER SOLO Y ÚNICAMENTE UNA CLASE ABSTRACTA A LA VEZ. esto significa que la herencia muere directamente al utilizar una clase más.

//! Las clases abstractas no  se pueden instanciar usando new. Toca instanciarlas mediante las clases hijas.

//TODO: Implementación de métodos abstractos:

//? Las clases hijas deben proporcionar una implementación concreta de los métodos abstractos definidos en la clase abstracta. La implementación debe tener la misma firma (nombre y parámetros ) que como se define en el método abstracto. ej:


abstract class Animal {
    abstract public function hacerSonido();
}

class Perro extends Animal {
    public function __constructor(){}
    public function hacerSonido(){
        echo "!guau! \n\n";
    }
}

class Gato extends Animal {
    public function __constructor(){}
    public function hacerSonido(){
        echo "!miau";
    }
}

$perrito = new Perro();
$michi = new Gato();

$perrito->hacerSonido();
$michi->hacerSonido();



//! ---- REVISAR BIEN EL ARCHIVO DE PERSONA PARA ENTENDER MEJOR LOS PROCEDIMIENTOS REALIZADOS ---- !

 


?>
