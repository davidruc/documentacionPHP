<?php

include("includes/Persona.php");

//Todo: Métodos estáticos


//! En programación, un método estático es un método que pertenece a la clase en sí y no a una instancia específica de la clase

//* Por eso mismo es que a diferencia de los métodos de instancia, los métodos estáticos se pueden llamar directamente en la clase sin necesidad de crear un objeto o instancia de la misma.
 
//? HAY CIERTAS COSAS IMPORTANTES QUE TENER EN CUENTA DE LOS MÉTODOS ESTÁTICOS DE PHP, entre ellos los siguientes: 

//* No requieren una instancia: Los métodos estáticos se pueden invocar directamente desde la clase, utilizando la sintaxis Clase::metodoEstatico(), sin necesidad de crear un objeto de la clase. 

//! No pueden acceder a propiedades de instancia, no pueden acceder directamente a las propiedades de instancia de la clase, por lo mismo que no están instanciadas. Sólo pueden acceder a propiedades estáticas que pertenezcan a la clase.

// Por lo mismo de arriba, no pueden utilizar el $this.

//TODO: Útiles para utilidades compartidas: Los métodos estáticos son útiles para definir funciones o utilidades que no dependen del estado de una instancia específica. Se pueden utilizar para operaciones globales, cálculos matemáticos, acceso a bases de datos, manipulación de archivos, etc.


//! ---- REVISAR BIEN EL ARCHIVO DE PERSONA PARA ENTENDER MEJOR LOS PROCEDIMIENTOS REALIZADOS ---- !

$persona = new Persona("David", 22);
$miNombre = Persona::saludar();
echo $miNombre; 


?>
