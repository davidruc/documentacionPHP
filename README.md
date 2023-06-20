**PHP AVANZADO** *(Integración con bases de datos relacionales (Mysql))*

**BASES DE DATOS RELACIONALES:**

* Están basadas en el modelo relacional propuesto por Edgar Codd en los 70's

* Las bases de datos relacionales son un tipo de gestión de bases de datos, que organizan la información en tablas estructuradas en filas y columnas.
* Cada tabla representa una entidad o concepto de dominio del problema y cada fila corresponde a una instancia específica de dicha entidad. LAS COLUMNAS representan los atributos o características de dicha entidad. 
* Las relaciones entre tablas se realizan entre llaves principales y llaves foraneas.
*  SQL ofrece una serie de comandos que permiten manipular un CRUD.

**Ventajas de las Bases de Datos Relacionales**

* Menos rebundancia: se evita estar guardando varias veces un mismo dato.
* Previene inconsistencias.
* Es más efeciente.
* Integra los datos
* Es más segura en sus datos

**Reglas para tablas de bases de datos relaciones**

1. Cada tabla debe tener un nombre distinto.
2. Cada tabla puede contener varias filas.
3. Cada tabla tiene un valor para identificar de manera única las filas (o sea las llaves)
4. Cada columna de una tabla tiene un nombre único.



***********

**CONCEPTOS:**

* **Entidad** -> puede hacer referencia a cualquier cosa. Es una representación de algo, entidad persona, no es una persona es una representación de persona. Se utiliza para guardar cosas.

Por ejemplo: en el caso de un caso tangible como una tienda en linea tengo una base de datos con diferentes entidades como clientes - productos - ordenes de compra - proveedores - etc. LA NOMENCLATURA que se utiliza para llamar las entidades se llama *notación de chen*

Una palabra encerrada en un cuadrado es una entidad. ¿Qué es lo que hace que una entidad sea una entidad? Una casa no sería una casa sin paredes, tamaño, ubicación, precio etc.

- **Atributos** -> son los valores que definen una entidad. *Está representados por ovalos*.

* Existen **atributos simples y atributos compuestos**. 
  * Los simples son los que tienen un único dato. 
  * Los compuestos en cambio no, pueden contener dentro de si muchos otros atributos.
* **Los atributos multivalor **  son los que tienen muchas posibilidades, por ejemplo, en el caso de la entidad casa, está el atributo ventana -> este tiene múltiples valores.  *Su representación es con doble ovalo, es un ovalo dentro de otro ovalo.*
* **Los atributos derivados** (característica): se pueden obtener facilmente con otro dato. Ejemplo, antiguedad y fecha de construcción, o la dirección con la ubicación. *Es un ovalo solo punteado*
* **CLAVE:** Es una forma única de identificar algo. Es una forma de hacer que algo sea único e irrepetible, pero no deja de ser un atributo. 



Las entidades contienen instancias. Una instancia de entidad es la única incidencia de una entidad. Las entidades representan un juego de instancias que son de interés para solucionar algo en concreto. 

Exp:

ENTIDAD: PERSON -> INSTANCIA: John Smith

ENTIDAD: PRODUCT -> INSTANCIA: uná de cobre de 2.3*32mm



**Identificadores únicos**: (*clave única o clave primaria*)

Identifican de manera exclusiva cada registro de una tabla.

* Características: 
  * *unicidad:* Cada valor de un identificador único debe ser único en la tabla. 
  * *No nulidad*: Una clave primaria no puede contener valores nulos, debe estar definida en la tabla.
  * *Estabilidad:* Los valores deben ser estables y no cambiar con el tiempo. 
  * *Indexación*: Suelen ser utilizados como la base para crear los indices en la tabla. (*esto ayuda al momento de realizar la busqueda de registros específicos* )
  * *Referencialidad:* Se pueden utilizar como referencias en relaciones entre tablas.



***Algunos ejemplos de claves primarias son:*** un campo de identificación autoincremental. Un valor único generados externamente (ej: los códigos estudiantiles de la uis)

* Los identificadores únicos pueden ser potadores de información o no. Depende de como se plantee la bd.

********



**RELACIONES**:

* Las relaciones representan una asociación entre dos o más entidades.

* La línea de relación del diagrama puede ser obligatoria (*solida*) o puede ser opcional (*discontinua*) **opcionalidad**

* Estas líneas terminan en una única punta (una intancia) o en una pata de gallo (para una o más instancias).  **cardinalidad**

**********



**CLAVES FORÁNEAS:**

* Conocidad como claves externas o ajenas, son atributos o conjuntos de atributos que se utilizan para establecer la relación entre dos tablas.
* Cuando una tabla tiene una clave foránea sinifica que contiene un atributo que hace referencia a la clave primaria de otra tabla.  

*Características importantes de las claves foráneas:*

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
