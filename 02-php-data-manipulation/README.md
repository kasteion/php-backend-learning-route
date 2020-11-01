# DATOS

## INTRODUCCIÓN

Conocer PHP avanzado es en escencia dominar las funciones que el mismo lenguaje provee para evaluar y extraer datos.

Funciones, una función es en escencia un bloque de código aíslado que nos permitira realizar funciones y procesar datos.

También se trabajara con Arrays.

## COMILLAS

Conocer un lenguaje nos lleva a conocer la funciones que el lenguaje tiene para no inventar la rueda.

## EXTRACCIÓN DE DATOS

extraccion.php

## FORMATO DE DATOS

Vamos a ver como dar formato a los datos. Necesitamos tener el control exacto de esta información. Talvez queremos dar cierto formato antes de guardar en una base de datos. Tal vez queremos guardar en cierto formato y mostrar en otro.

**Alterar**

Tenemos la oportunidad de alterar la apariencia de nuestros textos.

**Reemplazar**

Podemos reemplazar, quitar un fragmento, poner otro de acuerdo a nuestra necesidad.

**Modificación**

formato.php

## EXPRESIONES REGULARES

Las expresiones regulares son un tema que parece complejo. 

El carácter `/` nos sirve como contenedor. La expresión regular inicia y finaliza con un `/`.

El carácter `^` nos indica el inicio de la expresión regular.

El carácter `$` nos indica el final de la expresión regular.

El carácter `-` nos sirve para especificar rangos. Ej. 0-9.

Los corchetes `[]` nos sirven para definir un patrón.

Las llaves `{}` nos sirven bastante bien para definir condiciones.

Una expresión nos devuelve verdadero o falso. Las utilizamos para validar los datos que los usuarios ingresan. La mayoría de expresiones regulares que podamos necesitar ya estan hechas.

## INICIANDO NUESTRO PROYECTO

Vamos a iniciar nuestro proyecto utilizando las herramientas PHP, Composer y PHPUnit. Necesitamos hacer un ejercicio utilizando estas herramientas para conocer como ordenar nuestro proyecto.

Ejecutamos:

> composer require --dev phpunit/phpunit

Esto creara el archivo composer.json con el require de phpunit. Ahora puedo agregar la configuración del autoload.

        "autoload": {
            "psr-4": {
                "App\\": "src/"
            }
        },

Luego podemos ejecutar el comando:

> composer dump

Para crear los archivos autoload.

        "name": "kasteion/validate",
        "description": "Proyecto de validación",

Luego podemos crear nuestro archivo phpunit.xml y con este archivo creado podemos ejecutar:

> vendor/phpunit/phpunit/phpunit

Ahora puedo crear mi carpeta test y un test llamado ValidateTest.php el estandar dicta que los archivos deben terminar con Test.

## REVISANDO NUESTRO PROYECTO

La manera de trabajar no es sobre un index.php sino sobre la estructura de un proyecto real apoyandose en composer y componentes de terceros.

# FUNCIONES

## ARGUMENTOS

Es lo que colocamos dentro de los parentesís en las funciones. 

También tenemos el concepto de referencia (Que apunta a otro elemento).

También tenemos el concetpo de argumento predeterminado.

## RETURN

La palabra return forma parte de cualquier función o metodo.

## CLOSURES

Aquí vemos conceptos de funciones anónimas.

# ARRAYS

## ARRAY SIMPLE

Un array simple es cuando no definimos una key. Los valores no se identifican de manera directa.

## ARRAY COMPLEJO

Los array complejos son llamados de igual forma arrays asociativos, donde prácticamente al valor le pones un nombre. Son arreglos clave, valor.

## FUNCIONES PHP PARA ARRAYS

Estas son algunas de las funciones de PHP utilizadas para los arrays:

- **sort**: Ordena un array.
- **rsort**: Ordena un array en orden inverso.
- **ksort**: Ordena un array por clave.
- **krsort**: Ordena un array por clave en orden inverso.
- **array_slice**: Extrae una parte de un array.
- **array_chunk**: Divide un array en fragmentos.
- **array_shift**: Quita un elemento del principio del array.
- **array_pop**: Extrae el último elemento del final del array.
- **array_unshift**: Añadir al inicio de un array uno o más elementos.
- **array_push**: Inserta uno o más elementos al final de un array.
- **array_flip**: Intercambia todas las claves de un array con sus valores asociados.

## COMPARACIÓN

Una comparación que nos ayuda a crear selects dentro de arrays de manera dinámica.
## UNIÓN

## RESUMEN FINAL
