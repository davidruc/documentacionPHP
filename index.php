<?php 

    //!COSAS BÁSICAS PHP

    //TODO: Funciones de salida en PHP

    echo "Hola mundo";
    printf("No estoy cheto"); //?Un echo no tan cheto, sólo puede imprimir una cadena de texto a la vez 
  
    //TODO: Variables y constantes

    //Las variables se definen con $, hay reglas para su definición, como por ejemplo que no comiencen con un número o con un caracter especial

    $variable = "hola";
    $numero = 323223;

    //Las constantes funcionan como en cualquier lenguaje, son espacios que se reservan en la ejecución del programa y no cambian. Por buena práctica siempre son definidas en MAYUSCULAS. 

    //Se utiliza la palabra reservada //? define("NOMBRE_CONSTANTE", "valor asignado");

    define("POKEMON_MAS_FUERTE", "Ratata");

    //TODO: Tipos de datos

    //Enteros, flotantes, cadenas de texto, booleanos, arreglos, objetos, recursos (se utilizan para almacenar referencias a recursos externos como conexiones a bases de datos o archivos externos al programa) y Nulos //? En resumen int - float - string - bool - array - object - resource - null.


    //*PHP tambien permite datos como constantes y datos compuestos como estructuras de datos o clases. 

    //TODO: Operadores Lógicos

    //? 1 Operadores aritméticos

    // + , - , * , / , % , ** //! Funcionan igual que en cualquier lenguaje de programación
    
    //? 2 Operador de asignación  "="

    //? 3 Operadores para ARRAYS

    // + -> //! Union de arrays
    // == -> //! Equivalencia
    // === -> //! Identidad
    // "!=" o <> -> //! Inequivalencia
    // "!==" -> //! NO-identidad

    //? 4 Operaodres lógicos

    // && y and -> sinifican And
    // || y or -> significan Or
    // xor -> //! Si un dato es verdadero devuelve verdadero pero pero si los dos son verdaderos devuelve falso, en eso se diferencia del or 
    // "!" -> diferente o Not

    //? 5 Operadores de comparación

    // == -> //! igualdad
    // === -> //! Identidad
    // "!=" ó <> -> //! No-igualdad
    // "!==" -> //! No-Identidad
    // < - <= -> //! Menor que & Menor o igual que
    // > - >= -> //! Mayor que & Mayor o igual que
    // <=> -> //! Operador NAVE ESPACIAL:  Si son iguales devuelve 0, si el primero es mayor que el segundo devuelve 1 y si el primero es menor que el segundo devuelve -1.


 ?>