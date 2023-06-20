**COMANDOS DML:**

Son los comandos que se encargan de la manipulación de los registros en las bases de datos.

* *INSERT INTO* : El comando INSERT permite agregar nuevos registros a la tabla seleccionada en la consulta SQL.

  * INSERT INTO table_name (column1, column2,  . . . ) VALUES ( value1, value2,  . . . );

  *También puedo ahorrarme ingresar dato por dato en las column usando* *.

  * Cuando la tabla cuenta con una columna autoincremental no es necesario pasar como argumento el nombre de la columna ni el valor.

* *UPDATE* : El comando UPDATE se utiliza para modificar los datos existentes en una tabla. Permite actualizar uno o más registros en una tabla. 

  El comando puede afectar múltiples filas si no se especifica por su cláusula WHERE.

  * UPDATE table_name SET column1 = value1, column2 = value2 WHERE condition;

  Usualmente la condición del WHERE es el id.

* *DELETE* : El comando DELETE se utiliza para eliminar registros existentes de una tabla. 

  *  DELETE FROM table_name WHERE condition;

  
