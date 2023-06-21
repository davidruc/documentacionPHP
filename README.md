**COMANDOS DQL** 

Se utilizan para recuperar y consultar datos de una base de datos. Estos comandos permiten realizar consultas y obtener información específica de las tablas.

* *SELECT* : Se utiliza para recuperar datos de una o varias tablas de la base de datos. Permite especificar qué columnas se desean recuperar, las tablas involucradas y las condiciones para filtrar los registros. El resultado es un conjunto de filas que coinciden con los criterios especificados.
* FROM: Es una clausula que se utiliza en el comando SELECT para especificar las tablas donde se deben recuperar los datos.
* WHERE: Es una cláusula que se utiliza en conjunto con el comando SELECT para filtrar los registros que se desean recuperar. Permite establecer condiciones basadas en los valores de las columnas para seleccionar solo las filas que cumplan con las condiciones.
* ORBER BY: Es otra cláusula que sirve para ordenar los resultados de una consulta SELECT en función de una o varias columnas. Se puede especificar si el ordenamiento es ASC (ascendente) o DESC (descendente).
* GROUP BY: La cláusula GROUP BY se utiliza para agrupar filas de una consulta SELECT en conjuntos basados en los valores de una o varias consultas. Se usa en conjunto con funciones de agregación como SUM, COUNT, AVG.
* HAVING se utiliza en conjunto con GROUP BY para filtrar los resultados de una consulta basada en las condiciones de las funciones de agregación aplicadas en la cláusula SELECT. 



**SELECT**:

SELECT column1, column2,  . . . FROM table_name;



Las condiciones se ponen al final: 

SELECT column1, column2,  . . . FROM table_name WHERE condition;



*****

**Operadores lógicos**

Son palabras clave utilizadas en SQL para filtrar los resultados de una consulta según ciertas condiciones. 

SON:

* **AND** : Permite que se cumplan múltiples condiciones. Si se tienen más de dos condiciones, todas deben ser verdaderas para que la fila completa se incluya en los resultados de la consulta. 

  Ej: 

  SELECT * FROM Employees WHERE Age > 30 AND Salary > 50000;

* **OR** : Permite que se cumplan múltiples condiciones, sin embarga si se tienen más de dos condiciones, sólo una debe ser verdadera para que se incluyan los resultados de la consulta.

  Ej:

  SELECT * FROM Employees WHERE Age > 30 OR Salary > 50000;

* **NOT** : Niega la condición que le sigue. Si tienes una condición la fila completa incluirá en los resultados de la consulta sólo si esa condición no es verdadera.



**Operadores de comparación:**

* **=** Igual a.
* **<> o !=** No es igual a.
* **>** o **>=** Mayor que o mayor que o igual a.
* **<** o **<=** Mayor que o mayor que o igual a.



******

**Operador LIKE**

Se utiliza en la cláusula WHERE para buscar un patrón específico en una columna. 

*El signo % representa cero, uno o varios carácteres* 

*El guion bajo _ representa un solo carácter*



SELECT * FROM employees WHERE FirstName LIKE 'J%';

* Esta consulta seleccionará todos los registros de la tabla Employees donde FirstName comience por J.

SELECT * FROM employees WHERE PhoneNumbre LIKE '123-456-_ _ _ _'; 

* Esta consulta seleccionará todos los registros de la tabla Employees donde phoneNumber tiene el formato 123-456- seguido por 4 números.



*****

**OPerador BETWEEN**

Se utiliza para seleccionar valores dentro de un rango determinado. Este rango puede ser numérico, de fecha o de texto.

SELECT * FROM table_name WHERE column_name BETWEEN value1 AND value2;

* Puedo haer la consulta también con un NOT BETWEEN.
  
