<?php 

// Iteración de objetos
header("Content-Type: application/json; charset:UTF-8");

echo "mediante una sentencia foreach es posible realizar la itereción:\n";

class Clase {
    public $var1 = "Valor 1";
    public $var2 = "Valor 2";
    public $var3 = "Valor 3";
    private $var_private = "variable privada";
    protected $var_protectec = "variable protegida";

    function iteraVisible(){
        foreach($this as $clave => $valor){
            print "$clave => $valor \n";
        }
    }
}

//Instanciamos
$clase = new Clase();
 
//Iteramos de manera externa: FORMA 1
echo "\nIteración de manera externa (sólo puede acceder a las propiedades o métodos públicos):\n";
foreach($clase as $clave => $valor){
    print "$clave => $valor \n";
}

//Iteramos desde el método construido: FORMA 2
echo "\n\nLlamando desde el método de la clase (Puede acceder a todos los datos):\n";
$clase -> iteraVisible();

