<?php

//TODO: PHP intermedio

//! POO 

//* es un paradigma de programación que se basa en el concepto de "objetos". Los objetos son entidades que representan conceptos del mundo real y que pueden tener propiedades (atributos) y realizar acciones (métodos).

//En la programación orientada a objetos, los objetos son la base fundamental y se crean a partir de clases. Una clase es una plantilla o un molde que define las propiedades y comportamientos que tendrán los objetos que se creen a partir de ella.

//? PHP es un lenguaje de programación que frecuentemente está dirigida el POO 

//* Los principales conceptos de la programación orientada a objetos son:

    //? Clase: Es una plantilla o definición que describe las características y comportamientos de los objetos que se pueden crear a partir de ella.
    //? Objeto: Es una instancia de una clase. Representa un individuo o entidad específica y tiene sus propias propiedades y comportamientos.
    //? Atributos: Son las propiedades o características de un objeto. Definen el estado de un objeto y se representan mediante variables en la clase.
    //? Métodos: Son las acciones o comportamientos que un objeto puede realizar. Representan las operaciones que pueden realizarse con un objeto y se definen como funciones en la clase.

//! Las copie y pegué del manual porque me gusta mucho como las definen. 

    //todo: Encapsulación: Es el principio que establece que los atributos y métodos relacionados deben agruparse en una clase para poder ocultar detalles internos y mostrar solo ciertas cosas, o una interfaz pública. 
    //* Esto se logra con la definición de los niveles de acceso "público- public", "privado-private" o "protegido-protect"

    //todo: Herencia: Es un mecanismo para crear nuevas clases en base de clases que ya existen. La clase que se utiliza como base para la creación de la otra se denomina "clase Padre" o "super clase" y por consecuencia, la otra se llama "clase hija" o "subclase". 
    //* La herencia de clases así como en Javascript permite la utilización de métodos y propiedades públicas. En el caso del método construct siempre se puede usar por el hecho de que siempre es creado de manera pública.

    //todo: Polimorfismo: Es la capacidad de un objeto de tomar diferentes formas o comportarse de diferentes maneras según el contexto. 
    //*Esto significa que puedo tener varias clases que heredan de una misma clase base, y cada una de ellas puede tener su propia implementación del método heredado. ejemplo sencillito: 
    
    
    // Clase base
    class Animal {
        public function hacerSonido() {
            echo "El animal hace un sonido genérico.";
        }
    }

    // Clase derivada
    class Perro extends Animal {
        public function hacerSonido() {
            echo "El perro ladra.";
        }
    }

    // Clase derivada
    class Gato extends Animal {
        public function hacerSonido() {
            echo "El gato maulla.";
        }
    }

    // Crear objetos de las clases derivadas
    $animal = new Animal();
    $perro = new Perro();
    $gato = new Gato();

    // Llamar al método hacerSonido() de cada objeto
    $animal->hacerSonido(); // Imprime "El animal hace un sonido genérico."
    $perro->hacerSonido(); // Imprime "El perro ladra."
    $gato->hacerSonido(); // Imprime "El gato maulla."

    //! De esta forma tengo 3 objetos iguales, que se comportan de maneras distintas gracias al polimorfismo.

?>
