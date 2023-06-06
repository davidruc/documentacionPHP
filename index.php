<?php 

//Cosas de espacios de nombre
header("Content-Type: application/json; charset:UTF-8");

//Se desaconseja completamente, como práctica de código, la combinación de varios espacios de nombres en un mismo fichero. El caso de uso principal es combinar varios scripts de PHP en el mismo fichero.

//El valor de __NAMESPACE__ es una cadena que contiene el nombre del espacio de nombres actual. En código global, que no es de espacio de nombres, contiene una cadena vacía. La constante __NAMESPACE__ es útil para construir nombres dinámicamente.


//Sin ninguna definición de espacios de nombres, todas las definiciones de clases y funciones son colocadas en el espacio global, como si lo estuvieran antes de que PHP soportara los espacios de nombres. Prefijar un nombre con \ especificará que el nombre es requerido desde el espacio global incluso en el contexto del espacio de nombres.



?>