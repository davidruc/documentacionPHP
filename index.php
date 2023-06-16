<?php

// TODO:  Namespaces en PHP

//* La palabra clave USE se utiliza en la definición de espacios de nombres para importar clases, funciones y constantes desde otros espacios de nombres. 

//? Cuando se utiliza use en la definición de un namespace, se está especificando por decirlo así una ruta corta para poder acceder a un elemento específico de otro espacio de nombres.


//! Si se tiene una clase definida en un espacio de clases y se quiere usar en otro espacio de nombres se hacer así:

    // Aquí lo importante es que si utilizo el namespace, antes de llamar todo tengo que traeme el name space, porque si no lo hago simplemente no ingresa y no hace nada 
    use App\Clientes;
    use App\Detalles;
    function my_autoload($clase){
        var_dump($clase); // Como estoy en un namespace, el nombre de la clase me entra como App\Detalles
        $fileClass = explode('\\', $clase); //! Lo que hago con explode es SEPARAR en donde se crea el \ y crear un array 
        var_dump($fileClass); // aquí se ve mejor
        require __DIR__.'/clases/'.$fileClass[1].'.php'; // se construye una ruta de archivo utilizando el directorio actual y la carpeta clases. //? La razón por la que se utiliza $fileClass[1], es porqué realmente lo que nos interesa es el nombre de la case, y esta siempre va a quedar en dicha posición.        
    }
    spl_autoload_register("my_autoload");

    $detalles = new Detalles;
    echo "<br>";
    $clientes = new Clientes;


?>
