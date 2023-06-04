<?php 

// Métodos mágicos

echo "Son métodos especiales que sobreescriben las acciones por defecto cuando se realizan cierta acciones por defecto.\n\n";

echo "OJO Todos los nombres de mérodos que cominezan con __ son reservados de PHP. Se recomineda no utilizarlos a menos que lo que se busque sea sobreescribir el comportamiento de PHP\n\n";

// Los Siguientes métodos se consideran mágicos: __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone(), and __debugInfo().\n\n TODOS LOS MÉTODOS MÁGIOS A EXCEPCIÓN DE __construct(), __destruct(), y __clone() deben ser declarados como públicos.



// __sleep() & __wakeup(): serialize() comprueba si la clase tiene un método con el nombre mágico __sleep(). Si es así, el método se ejecuta antes de cualquier serialización. Se puede limpiar el objeto y se supone que devuelve un array con los nombres de todas las variables de el objeto que se va a serializar. Si el método no devuelve nada, entonces null es serializado y un error E_NOTICE es emitido.
?>


