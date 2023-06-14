<?php 
   
    //TODO: Arrays, Arrays asociativos y funciones para Arrays

    //* Los arrays son estructuras de datos para almacenar múltiples valores en una sola variable. PUEDEN CONTENER CUALQUIER TIPO DE VALOR.

    //!Sintaxis: 

    $myArray = array("dato1", "dato2", 32, true);
    // O TAMBIÉN 
    $myArray = ["dato1", "dato2", 32, true];

    //! Se pueden acceder a los datos mediante sus posiciones

    echo "Mi posición 1 del array es: ".$myArray[1]."<br><br>"; //? Al igual que en otros lenguajes las posicones de un array comienzan por el 0, por lo que $myArray[1] retornará el "dato2"

    //! Función PUSH y UNSHIFT 

    //* Para añadir un elemento al final del array se utiliza array_push

    array_push($myArray, "ultimo dato");

    //* Para añadir un elemento al comienzo del array se utiliza array_unshift

    array_unshift($myArray, "primer dato");

    //! Función POP

    //* La función array_pop elimina el último dato del array y lo devuelve, ejemplo:
    var_dump($myArray);
    echo "<br><br>";
    $dato_eliminado = array_pop($myArray);
    var_dump($myArray);
    echo "<br><br>";
    echo "Mi dato eliminado fue: ". $dato_eliminado."<br><br>";

    //! Más adelante realizaré un commit donde se expliquen todas las funciones de arrays más utilizadas en PHP



    //? Los arrays asociativos en PHP son un tipo de estructura de datos que permiten asociar claves con valores. A diferencia de los arrays indexados que utilizan enumeración para poder acceder a los datos, los arrays asociativos utilizan CLAVES ÚNICAS para poder acceder a cada uno de sus valores

    $myArrayAsociativo = array(
        "clave1" => "val1",
        "clave2" => "val2",
        "clave3" => "val3"
    );
    $myArrayAsociativo = [
        "clave1" => "val1",
        "clave2" => "val2",
        "clave3" => "val3"
    ];

    //* Si deseo acceder a los valores de este array tengo que hacer la consulta directamente desde el nombre de la clave:

    echo $myArrayAsociativo["clave2"]."<br><br>"; //? Retornará "val2"

    // PHP introduce el bucle foreach inicialmente para poder recorrer arrays y objetos. //? foreach($nombreArray as $clave => $valor){}

    foreach($myArrayAsociativo as $clave => $valor){
        echo "Mi clave es ". $clave. ", y su valor es ". $valor."<br><br>"; 
    }
    
    //* También es posible meter un array dentro de un array, sólo que al igual que en JS toca hacer una doble iteración para poder acceder a los datos de ese array anidado.

    //! Funciones adicionales

    //* La función in_array evalua si existe un elemento en un array y devuelve un booleano

    in_array(32, $myArray); //? Devolverá un "true"

    // SORT & RSORT //* Se encargan de ordenar elementos numéricos de un array

    $arrayNumerico = [2, 4,2,432,3,2,1,34,23];

    sort($arrayNumerico); //! De menor a mayor
    rsort($arrayNumerico); //! De mayor a menor


    //? Si lo que quiero es ordenar un array asociativo lo que tengo que utilizar:

    // asort()  -> //!ordena por valores (orden alfabético)
    // arsort()  -> //!ordena por valores (z primero)
    // ksort() -> //!ordena por llaves (orden alfabetico)
    // krsort() -> //!ordena por llaves (De la z a la A)

    //? Las funciones Isset() y Empty():

    //* Son dos funciones útiles para conocer si una variable está definida o si una variable está vacía.
    
 ?>