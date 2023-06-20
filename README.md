**QUE SE PUEDE HACER EN SQL**

Se pueden hacer muchas cosas relacionadas con la administración y manipulación de bases de datos.

* Crear y administrar bases de datos. Se puede usar para crear y administrar su estructura. Esto incluye: 
  * Crear tablas
  * Definir columnas
  * Establecer restricciones de integridad
  * crear indices
  * Definir relaciones entre tablas. 
* Insertar, actualizar y eliminar datos. Con INSERT, UPDATE Y DELETE. 
* Consultar datos. Con SELECT
* Filtrar y ordenar datos con WHERE y con la cláusula ORDEN BY 
* Agregar funciones y cálculos.  Como: SUM, AVG, COUNT, MAX, MIN
* Se pueden crear vistas: Las vistan son consultas almacenadas que se pueden usar como tablas virtuales. Se pueden crear vistas en SQL para simplificar consultas complicadas, reutilizar consultas comunes o presentar una vista específica de los datos sin exponer toda la estructura de la base de datos.
* Establecer restricciones de integridad.

**********



**COMANDOS DDL:**

* SHOW DATABASE

*Muestra las bases de datos en el servidor local.*

* CREATE DATABASE [nombre de la BD]

Crea una base de datos en el servidor.

* DROP DATABASE [nombre de la BD]

Permite eliminar una base de datos del servidor MySQL.

* USE [Base de datos]

Permite seleccionar una base de datos para administrar cada uno de los objetos de la base de datos. 

* CREATE TABLE [table_name]

Permite crear una tabla en la base de datos en uso.



* ALTER TABLE

  Permite modificar la estructura de una tabla existente en la base de datos: 

  * AGREGAR COLUMNAS  

    ALTER TABLE table_name **ADD**  column_name datatype;

  * ELIMINAR COLUMNAS

    ALTER TABLE table_name **DROP** COLUMN column_name;

  * RENOMBRAR UNA COLUMNA

    ALTER TABLE table_name **RENAME** COLUMN *old_name* to *new_name*;

  * MODIFICAR EL TIPO DE DATO

    ALTER TABLE table_name **MODIFY** COLUMN  column_name datatype;

    