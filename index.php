<?php

//* Usar la línea de código 
declare(strict_types = 1);
//* para generar una declaración de tipos estrictos 



//* Funciones que no retornan un valor. 

//? Las funciones que no retornan un valor se llaman "void". Se puede usar la palabra reservada "void" para definir una función de este tipo.
function sumar($num1, $num2): void {
    echo $num1 + $num2;
}
sumar(10, 2);

//! No es completamente necesario utilizar la palabra reservada void en las funciones que no retornan ningun valor
//Todo: SIN EMBARGO, ES BUENA PRÁCTICA UTILIZARLO PORQUÉ FACILITA EL ENTENDIMIENTO DEL CÓDIGO.

//*Para hacer uso de funciones que retornan un valor se utiliza la palabra reservada return. 

//! SI DESEO INDICAR EL TIPO DE DATO QUE VA A RETORNAR LA FUNCIÓN DEBO PONER :? Y EL TIPO DE DATO: Ejemplo ->

function usuarioAutentificado(bool $autentificado) : ?string{
    if($autentificado){
        return "Usuario autentificado";
    }
    else {
        return null;
    }
}

//? En el caso anterior se deberá ingresar un valor en la función booleano y retornará un valor tipo cadena de texto.


?>