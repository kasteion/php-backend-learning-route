# ENTENDER UN FRAMEWORK

## UN PROYECTO EN PHP

Para entender los frameworks profesionales que tenemos en el mercado.

Un proyecto en PHP necesitamos construirlo a través de un framework. Pues son una herramienta que nos ayuda a realizar un código más profesional.

Los frameworks nos invitan a no reinventar la rueda. Debemos entender el proceso de Petición, procesamiento y respuesta. 

Si nos dedicamos a hacer PHP desde cero nos vamos a tardar más tiempo. Pero utilizando el framework como caja de herramientas podemos ahorrarnos muchísimo tiempo, pues ya trae herramientas para manejar usuario, logins, cosas comunes...

## FRAMEWORKS PHP

Nosotros como programadores, necesitamos de herramientas profesionales. En estos tiempos serían Laravel y Synphony. Cuando aprendemos un framework, estamos al mismo tiempo aprendiendo programación, pues la misma herramienta nos lleva a utilizar prácticas profesionales. 

Los frameworks manejan un estándar exacto para manejar archivos y carpetas. 

## ESTRUCTURA DE CARPETAS

Visualizar la estructura de tarjetas con la que vamos a trabajar. Los frameworks proporcionan esta estructura normalmente. Pero en esta ocasión vamos a tratar de crear una estructura parecida a la que nos encontraríamos en laravel.

|-- app (El código de la aplicación)
|   |-- Hppt (Todo el código que maneja las solicitudes http)
|   |   |-- Controllers
|   |   |   |-- ContactController.php
|   |   |   |-- HomeController.php
|   |   |-- Request.php
|   |   |-- Response.php
|   |-- helpers.php
|-- composer.json
|-- public
|   |-- index.php
|-- vendor
|   |-- autoload.php
|   |-- composer
|   |   |-- ClassLoader.php
|   |   |-- LICENSE
|   |   |-- autoload_classmap.php
|   |   |-- autoload_files.php
|   |   |-- autoload_namespaces.php
|   |   |-- autoload_psr4.php
|   |   |-- autoload_real.php
|   |   |-- autoload_static.php
|-- views
|   |-- contact.php
|   |-- home.php
|   |-- layout.php

Empezamos ejecutando:

> composer init

Al archivo composer.json le agregamos la configuración para el autload:

```
    "autoload": {
        "psr-4": {
            "App\\": "app/"
        },
        "files": [
            "app/helpers.php"
        ]
    }
```

Luego ejecutamos:

> composer dump

Creamos la carpetas y archivos:

> mkdir -p app/Http/Controllers
>
> touch app/Http/Request.php
>
> touch app/Htpp/Response.php
>
> touch app/helpers.php
>
> mkdir views
>
> mkdir public
>
> touch public/index.php

## FRONT CONTROLLER

Es un patrón que nos ayuda a resolver el problema de un acceso único a un sistema web.

En el pasado creabamos la página index.php, contactos.php, servicios.php. Con este patrón se logra que todo pase a través de index. Necesitamos centralizar todo el acceso a la web.

Entonces... a programar en el index.php

Front Controller es centralizar todas las peticiones. El usuario pide una página y nosotros la procesamos a través de la clase request.

## REQUEST

Necesitamos configurar este archivo, llamado request para entender que es lo que está pidiendo el usuario y enviarle una respuesta.
 
 Nos vamos a configurar Request.php

## REQUEST: MÉTODO SEND

Request.php

## RESPONSE

Response.php 

## CONTROLLERS

En esta clase se trabajarán con los controladores. Un controlador está entre la vista y los datos. En el controlador se procesa lo que el usuario esta necesitando.

## VIEWS

Ya tenemos el ciclo construido en nuestro sisitema. 

Index --> Request --> Controller --> Response

El código necesita que creemos unas vistas.

El ciclo es básicamente el mismo en cualquier framework. Pero en un framework no tendremos que configurar las vistas, plantillas, carpeta de controladores, el namespace. Todo esto ya viene ya hecho, solo nos tenemos que enfocar en resolver nuestro problema. 

No tenemos que preocuparnos de login. Conexiones a base de datos. Un framework trae ya muchas de estas cosas y aparte de eso los mantienen actualizados y hace nuestras aplicaciones más seguras.

## HELPERS

Un helpers es una función ayudante que colocamos para utilizar en las vistas y los controladores. Los frameworks modernos proporcionan muchos helpers.

Un helper nos ayuda a aislar código repetitivo y convertirlo en una función sencilla que podemos utilizar en las vistas y los controladores.

## LOS FRAMEWORKS MODERNOS

El ciclo es:
1. Petición
2. Procesamiento
3. Respuesta

Los frameworks nos proporcionan una estructura inicial. Y a partir de esa base, con los conocimientos de php, puedo construir extensiones que la gente puede descargarse o construir aplicaciones asombrosas.

No hay que reinventar la rueda. Un framework nos ayuda a lograr esto. Podemos utilizar lo que ya viene construido y enfocarnos en el dominio del negocio.

El framework moderno también fácilita el trabajo en equipo. Pues no debemos crear una estructura, en cambio ya sabemos en que carpeta está de acuerdo a su función.

## VENTAJAS DE USAR FRAMEWORKS

Hoy en día los frameworks son la mejor herramienta que tenemos a la mano como programadores, es la opción que debemos usar siempre. La estructura que aprendimos se presenta como una estructura de carpetas sólida y segura. esto te ayudará a responder el "porqué" de muchas cosas respecto a Laravel, Symfony y otros frameworks.

Estos ofrecen una estructura sencilla, útil y muy robusta aprobada por la mayoría de las personas en la comunidad. El único objetivoaquí es aprender todo lo necesario para entender a un framework como Laravel o Symfony, estos breves textos, clases y conceptos te darán la orientación necesaria para que puedas extender, comprender y adaptar de mejor manera estos frameworks modernos a tu necesidad única y particular.

Siempre hemos tenido dudas respecto a dónde colocar los archivos fuentes de Javascript, imágenes, archivos finales de Javascript, archivo fuentes de CSS y archivos procesados de CSS, paquetes externos y separacipon de lógica, vista, controladores, etc. La idea es aprender de estas grandes herramientas y seguir su estándar para crear proyecto profesionales.

Cuando se comienza con el lenguaje PHP es complicado adoptar una estructura útil y estándar debido a su flexibilidad, es dificil conseguir la mejor forma de organizar un proyecto. Mi consejo es claro, puntual y directo, leamos código y aprendamos de ellos, en este caso lee el código de Laravel y Symfony.

Los frameworks nos ayudan respecto a los siguientes puntos:

1. Desde su descarga todo está organizado.
2. No reinventemos la rueda.
3. Poseen una gran arquitectura.
4. La seguridad ya está configurada y probada.
5. Respaldo y ayuda de la comunidad.
6. Más oportunidad de empleo.
7. Mejor trabajo en equipo.

Estas cosas reafirman que el desarrollo con frameworks es cada vez más real por todas las soluciones que ofrecen. Lo podemos comprender como una herramienta más de trabajo y aprendimos PHP para comprenderlos mejor.

Las características notables son:

1. Administración de plantillas.
2. Manejo fácil y sencillo respecto a una base de datos.
3. Sistema de rutas completo y profesional.
4. Administrador de peticiones.
5. Documentación y comunidad.
6. Rápido desarrollo y actualización.
7. Sencillo mantenimiento.
8. Manejo correcto de peticiones y respuestas.
9. Apertura para trabajar con otros proyectos.
10. Comandos propios para acelerar el trabajo.
11. Manejo de caché.
12. Manejo profesional de archivos.
13. Sistema de email incluido.
14. Sistema adecuado para crear proyectos con testing.
15. Y mucho más...

El potencial de estos proyectos no se puede comparar con nada ya que nos permiten crear cualqueir proyecto a nuestra medida. Es solo descargar el framework (la plantilla) y comenzar a construir nuestro proyecto personalizado. Esto no queire decir que todos los proyectos sean iguales y esta es otra ventaja, podemos cada vez crear algo único y totalmente personalizado. 

Todo gira entorno a:

1. Petición
2. Procesamiento
3. Respuesta

## DESPEDIDA

Siempre deberías estar utilizando un framework. Si el proyecto es muy pequeño... podemos utilizar un mini framework como Lumen. 

Lo más importante es entregar resultados profesionales al mundo.

## MALAS

¿Qué es un Request?
¿Qué es un Response?
¿Cuál es el papel de la vista?
