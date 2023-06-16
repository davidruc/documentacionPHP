<?php

//! DATO DEL Polimorfismo:
//* Permite tratar objetos de diferentes clases de manera uniforme, utilizando una interfaz común (básicamente las interfaces y las clases abstractas)

// TODO: Autoload: 

//? El autoload es una técnica para cargar automáticamente las clases cuando son necesarias, sin tener que estar ingresando todo el tiempo los archivos para la ejecución del código. 

//* El autoloading en PHP se base en la función spl_autoload_register(), que permite registrar una o varias funciones de autoload


function my_autoload($clase){
    require __DIR__.'/clases/'.$clase.'.php'; //* __DIR__ es una constante mágica que da la ruta relativa de un archivo desde afuera. esto es altamente útil cuando estemos manejando en un ambiente de trabajo donde ponerse a poner la salida y entrada de las carpetas va a resultar engorroso y complicado.
}
spl_autoload_register('Interfaces'); 

//* AQUI ya puedo instanciar las clases que están en los archivos 

//! OJO, SUPER IMPORTANTE. El nombre de los archivos debe ser el mismo que de las clases.
?>
