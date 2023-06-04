<?php 

//Palabra clave Final
header("Content-Type: application/json; charset:UTF-8");
echo "Impide que las clases hijas sobrescriban un método, antecediendo su definición con final.\nSi la propia clase se define como final, entonces no se podrá heredar de ella. Ejemplo:\n\n";

class ClasePadre {
    public function test(){
        echo "Llamada de ClasePadre::test()\n";
    }
    final public function secondTesting(){
        echo "Llamado a ClasePadre::secondTesting()\n";
    }
}


$clase = new ClasePadre();
$clase -> test();
$clase -> secondTesting();

//Si intento creo una clase hija que herede la padre va a generar un error fatal, el hecho de que haya utilizado la palabra final es como si cerrara por completo las opciones de herencia.

// class ClaseHija extends ClasePadre {
//     public function secondTesting(){
//         echo "Llamado a ClaseHija::secondTesting";
//     }
// }  Si descomento este código se rompe lo que tengo


