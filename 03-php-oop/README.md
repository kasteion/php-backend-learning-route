# FUNDAMENTOS

## INTRODUCCIÓN

1. Clase: User.php
2. Objeto 1: $user1 = new User;
3. Objeto 2: $user2 = new User;

Herencia, Polimorfismo, Interfaces.

## DEUDA TÉCNICA

Esto hace referencia al retrabajo, ocasionado por trabajar rápidamente el día de hoy haciendo código que simplemente funciona pero está mal programado.

La deuda técnica es el coste y los intereses a pagar por hacer mal las cosas. Es el sobre esfuerzo a pagar por mantener un producto de software mal hecho. 

En algun momento podríamos programar algo con la idea de que simplement funcione. Pero en esos momento debemos refactorizar inmediatamente. Debemos programar que funcione, para que pueda ser legible y mantenible en el futuro.

## CODE SMELL

Esto se refiere al mal olor del código. No nos referimos a errores técnicos sino a errores de orden y de diseño. Esto sucede mucho cuando queremos desarrollar un software en copiando código de otro (otros). El sistema funciona... pero huele mal.

Puede suceder cuando estamos copiando código en diferentes proyectos. De modo que el código está repetido en todos lados y luego cuando queremos cambiar algo en esa parte del código hay que irlo a buscar en todas partes.

Para evitarlo debemos escribir código limpio. Evitando crear super clases, Evitando hacer programación estructurada dentro de clases. Evitando copiar código de una clase a otra.

## CÓDIGO ESPAGUETI

Como un plato de espagueti... todo esta allí en el mismo plato. Es un código que se encuentra totalmente estructurado por medio de if, for, while, todo en un mismo archivo.

Resuelve el problema pero inmediatamente mejora tu código (refactoriza tu código) alcanzando el mismo resultado pero teniendo un mejor código creado.

La programación orientada a objetos nos va a servir para organizar mejor nuestro código. El dinero en la programación está precisamente en el mantenimiento.

**Cómo evitar el código espagueti**
1. Resuelve el problema.
2. Estructurar de manera lógica y coherente en varias funciones para separar las estructuras condicionales de tu programa. Que cada if sea una función.
3. Crea una o varias clases según sea el caso.

## INCLUSIÓN DE ARCHIVOS

**Include**
Nos permite incluir un archivo dentro de otro. Si no lo encuentra solo genera un warning que permite continuar.

**Require**
También permite incluír un archivo dentro de otro pero de forma más exigente que un Include. Si no encuentra el archivo requerido se detiene el sistema.

**Require_Once**
También para requerir un archivo pero PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye nuevamente.

# PROGRAMACIÓN ORIENTADA A OBJETOS

## INTRODUCCIÓN A CLASES Y OBJETOS

Basicamente podemos decir que las cases son moldes basandonos en el molde podemos crear cualquier cantidad de objetos.

## ABSTRACCIÓN

Significa aislar, separar o sacar y nos ayuda a abstraer. A pensar en el resultado final antes de que hagamos una programación.

Abstraer es aislar, separar y organizar pensando siempre en el resutaldo final. Se puede lograr creando una interfaz, una clase abstracta o una clase común y corriente.

## ALCANCE O ENCAPSULAMIENTO

El alcance hace referencia al encapsulamiento o principio de ocultación. (Scope)

## MODULARIDAD

El futuro de todo sistema es el mantenimiento, nosotros debemos pensar en módulos y no en un solo archivo con toda la programación.

El tema de modularidad hace referencia a tener una pequeña pieza de código, que unida a muchas otras piezas pequeñas de código forman un gran sistema.

Pensemos en nosotros, que vamos a estar dando mantenimiento al código.Y pensemos también en los otros, las otras personas que van a estar dando mantenimiento al código.

Si dividimos el código en partes pequeñas, también podremos agregar de mejor manera la parte de las pruebas.

## POLIMORFISMO

Un mismo elemento puede comportarse de diferentes maneras y dar diferentes resultados.

## POLIMORFISMO: INTERFAZ

Que una cosa tenga diferentes comportamientos. Podríamos tener un metodo get que devuelva json, pero también el mismo get podría devolver xml.

En programación avanzada vamos a utilizar interfaces, trabajamos con interfaces porque esto es lo que enviamos a nivel de configuración. Estas bases nos serviran de manera solida como conceptos para entender patrones de diseño. 

El patrón de diseño es una solución estandar creada para atacar problemas comunes que nos invitan a no reinventar la rueda. Estos patrones requieren de interfaces y diferentes archivos.

## HERENCIA

Básicamente, tenemos una clase madre y una clase hija. La clase hija hereda de la clase madre. La clase hija tiene los mismos métodos de la clase madre. Si la clase madre tiene 5 métodos y la case hija tiene 4 métodos. Al heredar la clase hija tendrá 9 métodos.

## INTERFACES

Una intefaz se desarrolla y luego se implementa en una clase. Luego estamos obligados a implementar todas las interfaces en la clase que la implementa. 

En la interfaz va que es lo que va a hacer y en la clase va como lo va a hacer.

Una intefaz es un contrato, y aquella clase que implemente la interfaz esta obligada a definir los metodos.

Digamos si la intefaz fuera para base de datos entonces esta debería tener los métodos get, put, delete, update.

## RESUMEN

La programación orientada a objetos es una forma de programar, un paradigma o una técnica. Los conceptos que aquí se aprenden sirven para muchos lenguajes de programación. Recordemos que para programar de esta forma en realidad debemos crear objetos, y un objeto es una instancia de una clase y una clase es el molde.

- Programación orientada a objetos: es la técnica.
- PHP: es el lenguaje de programación (donde implementamos la técnica).

Podemos resumir los diferentes conceptos de la siguiente manera:

1. Herencia: Compartir métodos entre clases padres y clases hijas.
2. Abstracción: Significa aislar, separar y sacar.
3. Polimorfismo: Capacidad o virtud que tienen los métodos donde, por ejemplo, un mismo método puede tener diferentes comportamientos y dar diferentes resultados.
4. Modularidad: Este principio básicamente nos ayuda a tener cada vez piezas de código más pequeñas y entendibles, donde cada pieza es un módulo y muchos módulos forman el sistema entero.
5. Encapsulamiento: Un objeto debe estar aislado y ser un módulo natural. Esto se cumple aplicando la protección a las propiedades impidiendo su modificación y básicamente se refiere a controlar el acceso.

Al entender este estilo conseguimos organizar mucho mejor nuestro código agrupando tareas comunes para crear una sola solución y usarla las veces que sean necesarias en nuestro proyecto. Evitamos con esto repetir código y ganamos mucho al dar mantenimiento en el futuro.

1. Comienza con la palabra reservada class.
2. El código va entre llaves {}.
3. La información se guarda en propiedades que pueden ser públicas, privadas o protegidas.
4. Cada acción la colocamos en métodos que básicamente son funciones o bloques de código dentro de una clase. 
5. $this es una variable reservada por el lenguaje que podemos usar para acceder a elementos propios, siempres y cuando estemos en la instancia de la clase.
6. new es la palabra clave usada para crear un objeto a partir de una clase.

En el mundo de la programación tenemos muchas técnicas y formas, podemos instanciar una clase dentro de otra y navegar por sus métodos sin restricción.

```
<?php

class User {
    public $type;
}

class Admin {
    public function greet(){
        echo "Hola Administrador";
    }
}

$user = new User;
$user->type = new Admin;
$user->type->greet();
```

```
<?php
class Person {
    public function greet() {
        echo "Hola $this->name";
    }
}

class User {
    public $type;
}

class Admin extends Person {
    public $name = 'Administrador';
}

$user = new User;
$user->type = new Admin;
$user->type->greet();
```

Son conceptos, métodos o formas que usamos a veces sin saber que estos conceptos existen.

# PROYECTO EN PHP

## INICIANDO NUESTRO PROYECTO: PHPUnit y CLASES HEREDADES

> composer require --dev phpunit/phpunit

Editamos el archivo composer, agregando name, description, autoload.

> composer dump

Creamos el archivo phpunit.xml para configurar phpunit, Creamos la carpeta tests. Y creamos PostTest.php

## CONTINUANDO NUESTRO PROYECTO

Luevo vamos ejecutando

> vendor/phpunit/phpunit/phpunit 

Para ir ejecutando los tests y programando de acuerdo a los errores que nos va generando la ejecución de los tests.

## RETO - EJERCICIO

Crea un ejemplo que ilustre la configuración de un post o artículo de un blog. Entendemos que este tipo de soluciones requieren un autor (quien crea el post) y el post (pieza de contenido creada por un autor). Este post endrá categŕías para segmentarlos y hacer un fácil filtrado.

¿Qué necesitas?

1. User: Clase base para los autores.
2. Autor: Hereda de User y es quien creará a los post o artículos.
3. Post: Clase protagonista, es quien servirá para dar vida al objetivo principal de un blog.
4. Category: clas eque servirá para segmentar a nuestros artículos. Es un campo más de los artículos y permitirá por ejemplo que un artículo sea de PHP, Vue.js, JavaScript, etc.

```
class User {
}

class Author extends User {
}

class Post {
}

class Category {
}
```
