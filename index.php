<?php

//? Las estructuras de control son las mismas de js, if, for, foreach, switch, while, do-while, también existe una estructura de control nueva que es el "match". 

//* La estructura de control match es muy similar al switch, con la diferencia que compara por identidad, es un poco más estrícta. 

//? Algo importante de las estructuras de control es el control de excepciones. Nos permiten manejar errores o situaciones inespiradas que puedan ocurrir en la ejecución del programa

//TODO: Funciones definidad por el usuario

//* Son bloques de código reutilizables en varias partes del código que se pueden llamar en partes específicas del programa.Esto permite que el código sea modular y reutilizable. Son lo mismo que en js 

function funcionDePrueba($num1, $num2){
    echo $num1 + $num2;
}
funcionDePrueba(3,4); // Hay que usar la palabra reservada "function" para hacer uso de las funciones. 

//! En php existen distintas formas de definir funciones:

    // Existen las funciones anónimas, las funciones variables y también las funciones flecha.

    //ej de función variable:

    $saludo = function($nombre){
        echo "Hola". $nombre;
    };

    $saludo("mundo");





?>