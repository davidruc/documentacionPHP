**CONSTRAINTS**

Los constraints o restricciones son reglas que se aplican a las columnas de una tabla para mantener la integridad de los datos y asegurar que se cumplan ciertas condiciones. Estas restricciones definen las reglas y limitaciones en los valores que pueden ingresarse, actualizarse o eliminar en una tabla. 



*Constraints más comunes en MySQL:*

* PRIMARY KEY: Es una restricción para identificar de manera única cada fila en una tabla. Únicamente puede haber una primary key por tabla y no puede contener valores nulos. 

*Para definir una primary key se utiliza:*

​		ALTER TABLE table_name ADD CONSTRAINT PK_table_name PRIMARY KEY (nombre)

(En el caso de Maria DB no hay necesidad de poner CONSTRAINT PK_table_name)

* FOREIGN KEY: Es una restricción que establece una relación entre dos tablas. Utilizando una columna o un conjunto de columnas en una tabla que hace referencia a la primary key de otra tabla. 
* UNIQUE: Garantiza que los valores de una columna o conjunto de columnas sean únicos en la tabla.
* NOT NULL: Es una restricción que indica que una columna no puede contener valores nulos.
* CHECK: Permite definir condiciones específicas para los valores de una columna. Solo se permite insertar o actualizar registros que cumplan con la condición definida. 

