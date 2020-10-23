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

# FUNCIONES

## ARGUMENTOS

## RETURN

## CLOSURE

# ARRAYS

## ARRAY SIMPLE

## ARRAY COMPLEJO

## FUNCIONES PHP PARA ARRAYS

## COMPARACIÓN

## UNIÓN

## RESUMEN FINAL
