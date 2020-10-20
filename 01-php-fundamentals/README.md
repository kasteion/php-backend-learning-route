# INTRODUCCIÓN

## PRESENTACIÓN DEL CURSO

**PHP**

Este lenguaje de programación funciona en la Web y nos va a ayudar a entregar a nuestros clientes sistemas profesionales. Un lenguaje de programación mantiene sus propias reglas (Sintáxis)

**¿Cómo funciona el mundo Web?**

Sin importar el lenguaje en que estemos trabajando, siempre va a existir una petición, un procesamiento y una respuesta.

## HERRAMIENTAS PARA SEGUIR EL CURSO

PHP es un lenguaje del lado del servidor, para desarrollar aquí debemos convertir a nuestro equipo en un servidor web sin importar el método o la manera de lograrlo, por ello lo explico de forma sencilla precisamente para enfocarnos netamente en la programación web y no en el sistema de servidores. Para ello debemos contar con los servicios necesarios lo que nos permitirá seguir con éxito el curso.

Decir que nuestro equipo se comportará como servidor web significa que instalamos un programa con el fin de procesar sistemas web o para la web, este servirá para recibir y procesar peticiones generando respuestas adecuadas a sus usuarios según sus solicitudes.

Luego instalamos el procesador del lenguaje que en este caso es el lenguaje de programación PHP. Al hacerlo nuestra computadora entenderá toda sentencia escrita y la procesará con éxito. Al mismo tiempo necesitamos instalar un gestor de base de datos y un cliente para administrarla, todo esto sería el paquete completo en nuestro equipo.

En resumen necesitamos tres cosas, el servidor Web, el lenguaje de programación y una base de datos.

Te recomiendo como siempre los medios sencillos para conseguirlo, de esta manera no perdemos nuestro enfoque que por supuesto es la programación web y no la administración de servidores. 

Otro tema importante es que puedes ver todos los comandos propios de PHP escribiendo php --help, existe uno en particular que te permitirá construir un server temporal, la función dice exactamente Ejecutar con servidor web incorporado y lo logramos con el comando `php -S <addr>:<port>` lo común es escribir localhost con el puerto 8000, ejemplo `php -S localhost:8000`.

Cualquier opción funcionaría perfectamente, el único requisito considerado importante es contar con una versión de PHP superior a la versión 7.3, la idea es siempre mantenerse actualizado.

Como nota adicional te comento que un programador debe siempre contar con las herramientas necesarias para trabajar mejor, así que instala Composer que es el gestor de paquetes PHP que provee todo lo que necesitemos respecto a este lenguaje. Puedes instalarlo desde https://getcomposer.org/download/

También es muy importante contar con Git.

Finalmente necesitaremos un editor de código, puedes usar Sublime Text, Visual Studio Code o el que prefieras. Y para observar el resultado podemos usar cualquier navegador web.

PHP es un lenguaje de programación relativamente fácil de aprender. Para este curso no se requieren conocimientos previso, sin embargo, para dominarlo es recomendable no descuidar temas sencillos como HTML. El objetivo es procesar código en el servidor y devolver como respuesta vistas en HTML. Una gran ventaja de PHP es su gran comunidad, esto te permitirá conseguir recursos, componentes y elementos interesantes en Internet para crear proyectos profesionales.

## INSTALACIÓN DE HERRAMIENTAS

## SER PROGRAMADOR

Un programador entiende y manipula un lenguaje de programación para crear soluciones que realmente sean útiles para la humanidad. Nosotros en escencia somos artistas y expresamos nuestro arte a través de líneas de código. (El arte de programar). Nuestro trabajo básicamente es escuchar a un cliente y ayudarle a alcanzar esas metas a través de código.

## EL MUNDO DEL DESAROLLO WEB

Resolvemos un problema importante, como es la conexión de sistemas utilizando internet o una intranet. Esto se resuelve con un sistema creado en el servidor. El mundo del desarrollo web hace implicito que siempre exista un Servidor (Allí está nuestro código), un Cliente (Que se conecta a nuestro servidor) y una Base de Datos. Debemos conocer conceptos del frontend. 

Un desarrollador web completo trabaja con PHP, MySQL, HTM, CSS, Javascript.

## INTRODUCCIÓN A PHP

Todo código debe estar escrito en un documento con extensión .php

Toda instrucción debe finalizar con un ;

        <?php

        /* Comentario de
        varias lineas 
        */

        class Answer
        {
            /**
            * Comentario de varias
            * lineas para 
            * demostrar el uso de 
            * comentarios.
            */
            
            protected $clients = []; // Mi comentario
            protected $insurers = []; # Mi comentario

        }

        ?>

## SINTAXIS BÁSICA DE PHP: ASIGNACIÓN Y ARITMÉTICA

        <?php

        // Asignación

        $num = 9;
        $lang = [
            'es' => 'español',
            'en' => 'inglés'
        ];

        // Aritmética
        echo "Suma 2 + 2 " . ((int) 2 + (int) 2);
        echo "Resta 2 - 2 " . ((int) 2 - (int) 2);
        echo "Multiplica 2 * 2 " . 2 * 2;
        echo "Divide 2 / 2 " . 2 / 2;
        echo "Módulo 2 % 2 " . 2 % 2;
        echo "Exponencial 2 ** 2 " . 2 ** 2;

        ?>

## SINTAXIS BÁSICA DE PHP: COMPARACIÓN Y VARIABLES VARIABLES

        <?php

        // Asignación

        $num = 9;
        $lang = [
            'es' => 'español',
            'en' => 'inglés'
        ];

        // Aritmética
        echo "Suma 2 + 2 " . ((int) 2 + (int) 2);
        echo "\nResta 2 - 2 " . ((int) 2 - (int) 2);
        echo "\nMultiplica 2 * 2 " . 2 * 2;
        echo "\nDivide 2 / 2 " . 2 / 2;
        echo "\nMódulo 2 % 2 " . 2 % 2;
        echo "\nExponencial 2 ** 2 " . 2 ** 2;

        // Comparación

        // Igual ==, valor '9' == 9 (Verdadero)
        // Igual ===, valor-tipo '9' === 9 (Falso)
        // Diferente !=, valor '9' != 9 (Falso)
        // Diferente !==, valor-tipo '9' !== 9 (Verdadero)

        // Variables variables
        $app = 'name';
        $name = 'Fredy';

        echo "\n".$app;
        echo "\n".$$app;

        ?>

## BLOQUES DE CÓDIGOS SENCILLOS EN PHP

Toda estructura de control me permite controlar el flujo de mi aplicación.

        <?php

        if (condition) {
            # code...
        } elseif (condition) {
            # code...
        } else {
            # code...
        }

        switch ($variable) {
            case 'value1':
                # code...
                break;
            
            case 'value2':
                # code...
                break;

            default:
                # code...
                break;
        }

        foreach ($datos as $id => $name) {
            # code...
        }

        foreach ($datos as $row) {
            # code...
        }

        $a=1;
        while ($a <= 10) {
            # code...
            $a++;
        }

        $a = 1;
        do {
            # code...
            $a++;
        } while ($a <= 10);

        for ($i=0; $i < 10; $i++) { 
            # code...
        }

# COMPOSER

## COMPOSER

Una herramienta que profesionalizó la forma en que trabajamos con php. Composer es esa una herramienta que instalamos en nuestro proyecto que nos va a ayudar a gestionar diferente paquetes. Si necesito un componente utilizo esta herramienta para instalar a partir de allí todo lo que requiero.

Su archivo principal tiene esta apariencia:

        {
            "name": "italomoralesf/text",
            "authors": [{}],
            "require": {},
            "autoload": {
                "psr-4": {
                    "Text\\": "src"
                },
                "files": [
                    "src/helpers.php"
                ]
            }
        }

Y es basicamente donde definimos diferentes datos, como por ejemplo el nombre del programador. Lo que nuestro paquete requiere, los autores.

En la carpeta composer:
> composer dump

Ahora yo estoy usando estos comandos:
> docker run --rm -it -v $PWD:/app composer dump
> 
> docker run -v $PWD:/var/www/html/ -p 8080:80 -it my-php-apache:latest /bin/bash
>
> service apache2 start

## REVISIÓN DEL PROYECTO

Con esta configuración se crea un sistema de autocarga en que llamamos a una que no declaramos en el index. Esta se busca en el helpers y el helpers la busca desde Format.

Si vemos los proyectos de laravel o de symphony todos funcionan de esta manera y lo primero que llaman es el archivo autoload.

## GESTIÓN DE PAQUETES PHP

El trabajo de Composer es centralizar todos los paquetes de PHP.

En el pasado buscabamos en Google "Enviar email con PHP", ahora ejecutamos los comandos directamente desde Composer. Esto nos asegura que vamos a buscar los paquetes necesarios al repositorio central de composer llamado packagist.org.

https://getcomposer.org

https://packagist.org

> composer require --dev phpunit/phpunit
>
> composer require nesbot/carbon

## CÓMO INICIAR UN PROYECTO

Cuando trabajamos con composer todo gira en torno al archivo principal llamado Composer.json y eso puede atemorizar.

No necesitamos memorizar la estructura del archivo composer.json, en su lugar podemos utilizar el comando `composer init`.

El comando `composer init` puede instalar automaticamente pero si no lo hacemos. Con el comando `composer install` se instalan los paquetes.

## INTRODUCCIÓN A JSON

El archivo principal de Composer tiene por extensión .json

        {
            "name": "platzi",
            "description": "Archivo json de ejemplo",
            "courses": {
                "advanced": ["PHP", "Vuejs"],
                "basic": ["JSON", "HTML"]
            },
            "esample": false
        }
        
## AUTOLOAD

Utilizando esta tecnología podemos cargar n cantidad de clases de manera automática.

        {
            "autoload": {
                "files": [
                    "src/file1.php",
                    "src/file2.php"
                ],
                "classmap": [
                    "database/seeds",
                    "database/factories"
                ],
                "psr-4": {
                    "Text\\": "src/"
                },
            }
        }

Con files cargamos archivos con funciones. Con classmap cargamos carpetas completas. 
Con psr-4 se hace referencia a src para cargar todo lo que está en esa carpeta.

> composer dump

## COMANDOS DE COMPOSER

Composer es una herramienta que funciona en la consola y para trabajar con composer debemos aprender los comandos para trabajar con composer:

Podemos empezar con un archivo composer.json con solo las llaves {}

Y ejecutamos el comando `composer dump`.

Lo correcto es crear composer, estructurar tu proyecto y a partir de allí estructurar los archivos. No se crean las clases y luego se usa composer para unirlas.

Si ejecutamos solo el comando `composer` y el comando nos dará las opciones.

`composer install` Para instalar todos nuestros componentes.

`composer create` Para crear un proyecto.

`composer remove` Eliminaría un componente.

`composer require` Es para indicarle a composer que configure el paquete en el composer.json. Lo usamos cuando tenemos un archivo composer.json vacío y conocemos el nombre de memoria el paquete y la versión.

`composer self-update` Es para actualizar la herramienta.

`composer update` Es para actualizar las librerías instaladas y requeridas con composer.

## COMPOSER.LOCK

Composer.lock es una ayuda muy importante para trabajos colaborativos. 

Si yo borro el archivo composer.lock podría actualizar las dependencias del proyecto de forma indiscriminada. 

Cuando nosotros compartimos proyectos entre programadores, no se comparte la carpeta vendor. Se comparte el código y los archivos composer.json y composer.lock. Así mi compañero desarrollador ejecutara el comando `composer install`.
