<?php
header("Content-type:application/json");
//TODO: Funciones más utilizadas de arrays:
 
//array_flip() intercambia las claves con sus valores correspondientes en un array: exp

    $array = [
        "nombre"=>"david",
        "edad"=>22,
        "apellido"=> "chacón"
    ];

    $changes = array_flip($array);
    var_dump($changes);
    echo "\n\n";
//array_fill() rellena un array con un valor especificado, se le ingresan 3 valores *PRIMERO: El número en el que comienza la clave a contar, **SEGUNDO: El número de repeticiones del valor ,***TERCERO: El valor especificado. Ej:


    $array = array_fill(3,5, "Hola mundo!"); //*Comienza en 3 el contador y se repite 5 veces el contenido.
    var_dump($array);
    echo "\n\n";

//array_filter()  Filtra elementos de un array usando una función callback

    function impar($var)
    {
        // Retorna siempre que el número entero sea impar
        return $var & 1;
    }

    function par($var)
    {
        // Retorna siempre que el número entero sea par
        return !($var & 1);
    }

    $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    $array2 = [6, 7, 8, 9, 10, 11, 12];

    echo "Impar :\n";
    print_r(array_filter($array1, "impar"));
    echo "Par:\n";
    print_r(array_filter($array2, "par"));
    echo "\n\n";

    //! También puedo definir la función que quiero llamar dentro del método

// array_map() Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.

    function cube($n)
    {
        return($n * $n * $n);
    }

    $a = array(1, 2, 3, 4, 5);
    $b = array_map("cube", $a);
    print_r($b);
    echo "\n\n";

// array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.

    function suma($carry, $item)
    {
        $carry += $item;
        return $carry;
    }

    function producto($carry, $item)
    {
        $carry *= $item;
        return $carry;
    }

    $a = array(1, 2, 3, 4, 5);
    $x = array();

    var_dump(array_reduce($a, "suma")); // int(15), ya que 1+2+3+4+5 =  15
    var_dump(array_reduce($a, "producto", 10)); // int(1200), ya que: 10*1*2*3*4*5
    var_dump(array_reduce($x, "suma", "No hay datos a reducir")); // string(22) "No hay datos a reducir"
    echo "\n\n";

// array_key_exists(): Comprueba si una clave existe en un array.
    $array = [
        "nombre"=>"david",
        "edad"=>22,
        "apellido"=> "chacón"
    ];
    var_dump(array_key_exists("nombre", $array)); //Retorna TRUE, porque si existe
    var_dump(array_key_exists("nombrsss", $array)); //Retorna FALSE, porque NO existe
    echo "\n\n";

//in_array(): Comprueba si un valor existe en un array.

    //! La misma vaina que el de arriba solo que con valores, puede usarse en arrays no asociativos, aunque aquí entre nos, en php todos los arrays son asociativos.


//array_rand(): Devuelve una o varias claves aleatorias de un array.

    //! Esto lo que hace es coger de un array grande una clave aleatoria y devolverla como una array. En el caso en que no se ingrese ningún segundo parámetro. En caso tal de que se ingrese el segundo parámetro numérico se devuelve un array con ese número de elementos.

    $array_random = array_rand($a, 2); //siempre retorna un valor aleatorio diferente.
    var_dump($array_random); 
    echo "\n\n";


//array_unique(): Elimina los valores duplicados de un array.

    //! Sin mucho que aportar a esa explicación

//array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.

    //! Sin mucho que aportar x2

//array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.

    //! útil para la comparación de arrays: sintaxis array_diff(array $array1, array $array2, array $...) 
    //? Puedo meter N arrays y retornará un array con todas las diferencias entre el primer array (el array1) con todos los N arrays que hay después.

//array_sum(): Devuelve la suma de todos los valores de un array numérico.
//array_reverse(): Revierte el orden de los elementos en un array.
?>
