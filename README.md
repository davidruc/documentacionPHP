<<<<<<< HEAD
**MySQL**
=======
**PHP AVANZADO** *(Integración con bases de datos relacionales (Mysql))*
>>>>>>> d30d5c010dc37dc0b99844205b019f05b99be607

Es un sistema manejador de datos libre uso, uno de los más utilizados. 

* Es veloz, fácil de utilizar, portable (corre en diversos sistemas operativos), soporta el lenguaje SQL, es seguro, entre otras cosas.

*********

**CONSOLA DE MySQL**:

Desde mi pc para usar mysql o MariaDB que tiene los mismos comandos es usando 

*sudo /opt/lampp/bin/mysql -u root*

Para los pcs de campus que tienen mysql nativo es con 

*sudo mysql -u root -p*

********

**Tipos de datos en MySQL**:

***Datos Numéricos:***

* ENTEROS: 

  * TINYINT (*-128 a 127*)
  * BIT (Boolean) (*Número entero con valor 0 o 1*)
  * SMALLINT (*-32768 a 32767*)
  * MEDIUMINT (*-8388608 A 838807*)
  * INT (*-2147483648 a 2147483647*)
  * BIGINT (*-9223372036854775808 a 9223372036854775807*)

* FLOTANTES: 

  * FLOAT (m, d): Contine un número en coma flotante de precisión sencilla. (*La m es la anchura y D el número de decimales.*)
  * DOUBLE (m,d): Contiene un número flotante de precisión doble. 
  * DECIMAL (m [,d]): Se utilizan para guardar valores para los que es importante preservar una precisión exacta, por ejemplo con datos monetarios.

* CARÁCTER: 

  * CHAR (M): Valores válidos para M son de 0 a 255. Contiene una cadena de longitud constante. O sea que si o si tengo que rellenar el número de caracteres establecido. Los valores que hagan falta se rellenan con ceros (*CHAR(10)*)
  * VARCHAR (M): Los valores válidos para M son de 0 a 255 caracteres. Contiene una cadena de longitud variable. Los espacios al final se eliminan.
  * BLOB: Una longitud máxima de 65.535 carácteres. Válido para *objetos binarios, imágenes, ficheros de texto, audio o video*
  * TEXT: Una longitud máxima de 65.535 carácteres. Solo sirve para almacenar texto plano sin formato. Es camelcase. 
  * TINYBLOBTINYTEXT: Longitud máxima de 255 carácteres.
  * MEDIUMBLOBMEDIUMTEXT:  16777215 carácteres.
  * LONGBLOBLONGTEXT: 4294967298 carácteres.

* FECHA: 

  * DATE: Válido para almacenar una fecha con *año, mes y día* -> AAAA-MM-DD.
  * DATETIME: Almacena una fecha y una hora. AAAA-MM-DD HH:MM:SS.
  * TIME: Una hora. HH:MM:SS.
  * TIMESTAMP: Almacena una fecha y hora. Es lo mismo que DATETIME sólo que almacena en un rango menor. 

* MODIFICADORES O CONSTRAINTS:

  * AUTO_INCREMENT: El valor se va incrementando automáticamente en enteros. 
  * DEFAULT: Coloca un valor por defecto (el valor se coloca justo después de esta palabra)
  * NOT NULL: Impide que un campo sea nulo.
  * PRIMARY KEY: Hace que el campo se considere llave primaria.
  * UNIQUE: Evita la repetición de valores. 

<<<<<<< HEAD
  
=======
* * *Relación entre tablas*: Estas relaciones pueden ser uno a uno, uno a muchos o muchos a muchos. **Cardinalidad**
  * *Integridad referencial:* De alguna forma entiendo que no se pueden eliminar, modificar o agregar registros que rompan la relación entre tablas gracias a las fk.
  * *Consultas y operaciones:* Las claves foráneas permiten realizar consultas que involucran a varias tablas mediante la combinación de información relacionada. *Se pueden utilizar los JOINS y recuperar los datos de manera eficiente.*
  * Mantenimiento de la consistencia: Si se llega a actualizar la clave primaria en la tabla referenciada, se actualizará de manera automática la clave foranea para mantener la integridad de los datos.
* Usualmente se ponen las claves foráneas al final y se pone un fk_name para hacer referencia a que es una llave foranea.

**********

**Normalización de bases de datos:**

Es un proceso de diseño que se utiliza para organizar y estructurar las tablas de una base de datos relacionar de manera eficiente y libre de redundancias. El objetivo principal de normalizar es eliminar la duplicación de datos y garantizar la integridad y consistencia de la información que se almacena.

Estas formas normales se dividen en niveles, desde la primera forma normal hasta la quinta. Cada una de ellas aborda un aspecto específico de normalización.

* *Primera forma normal 1NF:*
  * Elimine los grupos repetidos de las tablas individuales.
  * Cree una talba independiente para cada conjunto de datos relacionados
  * Identifique cada conjunto de datos relacionados con una clave principal.
* *Segunda forma normal 2NF:*
  * Cree tablas inpendientes para conjuntos de valores que se apliquen a varios registros
  * relaciones estas tablas con una clave externa. 
* *Tercera forma normal 3NF:*
  * Elimine los campos que no dependan de la clave.
>>>>>>> d30d5c010dc37dc0b99844205b019f05b99be607
