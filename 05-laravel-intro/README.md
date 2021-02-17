# ENTENDER LARAVEL

## ¿QUÉ ES LARAVEL?

Podemos entederlo de forma sencilla como una herramienta de desarrollo web. Es una herramienta que nos va a ayudar mucho cuando necesitemos desarrollar un sistema web. Es necesario que utilicemos un framework como laravel, que tenga incluido muchas de las funcionalidades que necesitaremos para poder enfocarnos en lo que el cliente necesita.

Podemos pensar en laravel como un sistema en capas:
- Route
- Middleware
- Controller
- View

## HERRAMIENTAS NECESARIAS PARA TRABAJAR CON PHP Y LARAVEL

Para trabajar con PHP necesitamos convertir a nuestro equipo en un servidor web, esto se debe a que PHP es un lenguaje del lado del servidor. Del lado del servidor significa que consisten en el procesamiento de una petición de usuario en una computadora llamada servidor web, esta petición se procesa y luego genera páginas en HTML con la respuesta deseada.

**Servidor HTTP**

Un servidor web o servidor HTTP es básicamente un programa que se instala en una computadora con el fin de procesar un sistema web, con este programa la computadora queda preparada para recibir peticiones de usuario generando respuestas a clientes. Cuando escribes en el navegador platzi.com y presionas enter se busca en Internet la computadora con este nombre y al encontrarla el servidor procesa, entiende lo que necesitas y retorna la respuesta "la página home de platzi".

Para crear un proyecto o programa web necesitas simular que nuestro computador es un servidor web y lo logramos instalando un programa, en este caso sería Apache o Nginx.

**PHP**

Es el lenguaje de programación que usaremos en el curso y necesitamos instalarlo para que nuestro Servidor HTTP interprete correctamente nuestro código. Básicamente vamos a escribir en PHP así que instalamos el idioma PHP en nuestro equipo.

**Base de Datos**

Necesitamos instalar en nuestro equipo la base de datos que usaremos en el curso, esta puede ser MySql o MariaDB. Ambas funcionarían muy bien porque se entienden perfectamente con PHP.

**Herramientas Importantes**

El método de instalación de Laravel es a través de composer, un gestor de paquetes PHP que provee todo lo que necesitemos respecto a este lenguaje. Puedes instalarlo desde este enlace http://getcomposer.org/download/

También es muy importante contar con Git, este es nuestro control de versiones de nuestro software y lo podemos instalar desde su web https://git-scm.com/downloads

Para escribir código necesitaremos a Sublime Text, Visual Studio Code o el editor que prefieras, en el curso usaremos a Visual Studio Code. Y para observar el resultado podemos usar a cualquier navegador web, yo usaré Google Chrome.

**Resumen**

Necesitamos el software necesario para convertir nuestro computador en un servidor web, en resumen necesitamos:

1. Lenguaje: PHP >= 7.2.0
2. Servidor: Apache, Nginx
3. Base de datos: MySql, MariaDB
4. Composer
5. Git
6. Editor de código
7. Navegador

**Instalación de Laravel**

Podemos usar composer directamente o instalar un software llamado "instalador de Laravel"
1. Con composer sería `composer create-project --prefer-dist laravel/laravel nombre-app`
2. Con Laravel Installer sería `composer global require laravel/installer`

En el curso usaremos la opción dos.

## ENTENDIENDO EL CICLO DE VIDA DE LAS SOLICITUDES WEB

Es importante entender el ciclo de vida de una solicitud para sentirnos más comodos y seguros a la hora de fabricar un sistema. 

Necesitamos hacer la instalación de laravel.

> laravel
>
> laravel new ciclo

## QUÉ ES UN CRUD Y CÓMO IMPLEMENTARLO

## LÓGICA DE CONTROLADORES Y VISTAS CON DATOS DE PRUEBA

## CREANDO UN FORMULARIO

# COMPRENDER LOS FUNDAMENTOS DE LARAVEL

## USO DE MIDDLEWARES

## SISTEMA DE RUTAS Y CONTROLADORES

## VALIDACIÓN DE DATOS (RUTAS, VISTAS, FORMULARIOS Y CONTROLADORES)

## BLADE: SISTEMA DE PLANTILLAS AVANZADO

## TRABAJANDO CON EL COMPONENTE LARAVEL/UI

# APRENDER SOBRE ELOQUENT ORM

## ELOQUENT: TRABAJANDO CON ESTE ORM

## RELACIONES DE TABLAS 

## COLECCIONES Y SERIALIZACIÓN DE DATOS

## FORMATO DE VALORES EN TABLAS Y PRESENTACIÓN DE DATOS

# CREAR PLATZIPRESS

## PROYECTO BLOG: PRESNETACIÓN Y CONFIGURACIÓN INICIAL

## CREACIÓN DE TABLAS, ENTIDADES Y DATOS DE PRUEBA

## PLANTILLAS DE TRABAJO Y ENTENDIENDO EL LOGIN

## DISEÑO VISUAL CON BOOTSTRAP

## VISTA INDEX Y BOTONES DE ACCIÓN

## IMPLEMENTACIÓN DEL FORMULARIO DE CREACIÓN

## IMPLEMENTACIÓN DEL GUARDADO

## CREANDO LA FUNCIÓN DE EDITAR UN POST

## ACTUALIZANDO NUESTROS POSTS

## INTEGRANDO CONTENIDO AUDIOVISUAL

# CONSTRUIR PROYECTO FINAL: API CON TDD (INTERMEDIO)

## INTRODUCCIÓN AL TESTING

## METODOLOGÍA TDD Y TESTING HTTP

## PROYECTO API CON TDD: PRESENTACIÓN Y CONFIGURACIÓN INICIAL

## STORE CON TDD

## REFACTORIZACIÓN Y VALIDACIÓN EN STORE

## SHOW CON TDD

## UPDATE Y VALIDACIÓN CON TDD

## DELETE CON TDD

## INDEX CON TDD

## PROTECCIÓN DE UNA API CON LOGIN

## CIERRE DEL CURSO
