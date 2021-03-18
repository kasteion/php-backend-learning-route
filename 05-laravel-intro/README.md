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

1. El explorador se va a public/index.php y se cargan las clases de php
2. Arranca nuestro framework (bootstrap/app.php)
3. Empieza nuestro sistema a aceptar solicitudes
4. Comienza lo que nosotros programamos en nuestro sistema (Ej. routes/web.php)

## QUÉ ES UN CRUD Y CÓMO IMPLEMENTARLO

Primero desde el contenedor de php ejecte el comando:

> php artisan migrate

Con el siguiente comando puedo ver las rutas que tengo en mí proyecto.

> php artisan route:list

Puedo crear un controlador con:

> php artisan make:controller UserController

## LÓGICA DE CONTROLADORES Y VISTAS CON DATOS DE PRUEBA

> php artisan tinker

Before:

factory(App\User::class, 12)->create();

After:

User::factory()->count(12)->create();

## CREANDO UN FORMULARIO

@csrf sirve para que Laravel genere un token que le indique que el formulario pertenece al proyecto en que estamos trabajando.

La validación se trabaja en el Controlador, en este caso en UserController.php

# COMPRENDER LOS FUNDAMENTOS DE LARAVEL

## USO DE MIDDLEWARES

Una capa muy importante son lo Middleware. Se trata de hacer filtrados a peticiones http. Cuando accedemos a una página web estamos accediendo por medio de el protocolo http. A través de esta capa podemos agregar seguridad. Toda la lógica que tenga que ver con el filtrado.

> laravel new middleware

Los Middleware son clases que van a estar en app/Middleware/ el más importante en este caso el el de Authenticate.php, este tiene la lógica necesaria para redigirigir al usuario al login si no está autenticado.

La ruta se puede proteger así (web.php):

```php
Route::get('/', function(){
    return view('welcome')
})->middleware('auth');

/* O así*/

Route::resource('users', 'UserController')->middleware('auth');
```

El controlador se puede proteger así:

> php artisan make:controller UserController

```php
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
```

Se pueden utilizar cualquiera de las dos formas pero pero no es necesario usar ambas. Regularmente se hace en la ruta para evitar que nuestros controladores sean demasiado largos.

Se puede crear un middleware de registro y tener logs detallados de cada solicitud entrante, cualquier cosa que se te ocurra respecto a HTTP puedes llevarla a cabo usando esta tecnología.

**Middleware Personalizado**

> php artisan make:middleware Subscribed

Ese middleware se crea en app/Http/Middleware/Subscribed.php. Con él puedes verificar si el usuario está suscrito a el plan de pago del sistema web. O crear un middleware que revise si el usuario es mayor de edad.

> php artisan make:middlware VerifyAge

En ambos casos tendremos archivos creados en app/Http/Middleware.

```php
namespace App\Http\Middleware;

use Closure;

class Subscribed
{
    public function handele($request, Closure $next){
        if (! $request->user()->subscribed){
            return abort(403, 'Sin suscripción activa');
        }
        return $next($request);
    }
}
```

**403**: La solicitud fue legal, fue correcta, pero el servidor no la responderá porque el cliente no tiene permisos.

```php
class VerifyAge
{
    public function handle($request, Closure $next)
    {
        if ($request->get('age') < 18){
            return redirect('guidelines');
        }
        return $next($request);
    }
}
```

Aquí dirigimos al usuario a una vista que tenga los textos apropiados para explicarle porqué no podmeos seguir con el registro.

**Registro de las Clase Middleware**

En Kernel.php buscamos $routeMiddleware

```php
protected $routeMiddlware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    'subscribed' => \App\Http\Middleware\Subscribed::class,
    'verify-age' => \App\Http\Middlware\VerifyAge::class,
];
```

Y luego podemos usarla y aplicarla donde corresponde.

```php
Route::get('/example', 'ExampleController@...')->middlware('auth', 'subscribed', 'verify-age');
```

## SISTEMA DE RUTAS Y CONTROLADORES

**Route**: Capa encargada de manejar el flujo. La ruta /, acerca de, cursos, productos, etc.

**Controller**: Nos permite agrupar lógica. Cada ruta apunta a una lógica de programación.

> laravel new routes
>
> cd routes
>
> code .

Las rutas se encuentran dentro de la carpeta /routes. Allí tenemos el archivo web.php que es donde vamos a trabajar mayormente. Si creamos comandos personalizados tenemos console.php, Si tratamos el tema de canales de comunicación, notificaciones, email en channels.php y las rutas de apis van en api.php

```php
Route::resource('pages', 'PageController'); // 7 rutas posibles
```

> php artisan make:controller PageController
>
> php artisan route:list

Route::resource crea 7 rutas posible, estas rutas son estandar:

- pages.index: Para ver el listado completo.
- pages.store: Para salvar (Post)
- pages.create: Para el formulario de creación.
- pages.show: Para ver un único dato.
- pages.update: Para actualizar. (Put)
- pages.destroy: Para eliminar. (Delete)
- pages.edit: Para el formulario de editar.

Eliminamos PageController.php

Podemos ejecutar el comando:

> php artisan make:controller PageController --resource

Para que me cree el controlador con lo 7 métodos posibles. Eliminamos nuevamente PageController.php

Podemos ejecutar artisan así para crear el controlador con sus 7 rutas y el modelo que se conecta a las tablas:

> php artisan make:controller PageController --resource --model=Page

## VALIDACIÓN DE DATOS (RUTAS, VISTAS, FORMULARIOS Y CONTROLADORES)

Cuando hablamos de validación, basicamente hablamos de filtros de peticiones http en un sistema. Si yo quiero crear un usuario tengo que validar el email, la contraseña, los datos requeridos.

> laravel new formrequest
>
> cd formrequest
>
> code .

Se puede cambiar el nombre de welcome.blade.php por post.blade.php

Si bien puedo colocar las validaciones dentro del controlador, no es el lugar correcto donde debo hacerlo. Entonces puedo hacer:

> php artisan make:request PostRequest

Entonces se crea un archivo en app/Http/Request/PostRequest.php, en el Request se crean las reglas de validación.

Y luego en el controller cambiamos el use de Request por el PostRequest.

Laravel no te obliga a utilizar las buenas practicas pero la buena practia es separa la validación del controlador.

## BLADE: SISTEMA DE PLANTILLAS AVANZADO

Blade es el sistema de plantillas de Laravel. Nuestras vistas no son .php sino .blade.php por eso se utilizan llaves y @.

> laravel new blade
>
> cd blade
>
> code .

Todo lo que tiene que ver con vistas esta en el directorio views.

- app.blade.php - Este archivo sería una plantilla

```
<body>
    @yield('content')
</body>
```

- home.blade.php

```
@extends('app')

@section('content')
    <p>
        hola, soy home
    </p>
@endsection
```

Entonces podemos crear archivos como header.blade.php y footer.blade.php y en nuestra plantilla:

```
<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>
```

Para mostrar estas plantillas lo que hace laravel es crear un archivo dentro de la carpeta storage/framework/views

Tips de blade:

- Para imprimir variables en blade usamo {{ $var }}
- Para imprimir variables escapando htmo {!! $var !!}

- Ciclos en blade:

```
@foreach ($vars as $var)
<li>{{ $var->value }}<li>
@endforeach
```

- Condicional

```
@if (!empty($var))
    $var->value
@endif

@if (!empty($var))
    $var->value
@else
    <p>Empty</p>
@endif

@if (!empty($var))
    $var->value
@elseif ($var > 18)
    <span>Soy mayor de edad</span>
@else
    <span>Soy menor de edad</span>
@endif
```

- Código php sin usar `<?php`...:

```
@php
// php code
@endphp
```

## TRABAJANDO CON EL COMPONENTE LARAVEL/UI

Es un componente creado por el creador de laravel. Que trata sobre el sistema de login y registro.

Esto es para Registro y autenticación de usuarios de un sistema Web en Laravel.

> laravel new ui
>
> cd ui
>
> code .
>
> composer require laravel/ui --dev
>
> php artisan

Podemos ver que aparecen nuevos comandos como ui:auth

Puedo ejecutar php artisan así para generar las rutas sin vistas:

> php artisan ui:auth

Para ejecutarlo con bootstrap:

> php artisan ui bootstrap --auth

Para ejecutarlo con react:

> php artisan ui react --auth

Y para ejecutarlo con vue:

> php artisan ui vue --auth

Para que tenga estilos las páginas de login y register podemos

> npm install
>
> npm outdate
>
> npm update
>
> npm run dev

# APRENDER SOBRE ELOQUENT ORM

## ELOQUENT: TRABAJANDO CON ESTE ORM

> laravel new eloquent
>
> cd eloquent
>
> code .

Con este comando podemos ver la ayuda de make:model

> php artisan make:model -h

Podemos crear todo con -a, o Este comando crea el modelo, factory y la migración

> php artisan make:model Post -m -f

Podemos crear una nueva base de datos en mysql y configurar las variables en laravel para conectarnos.

En la migración create_post_table.php

```php
Schema::create('posts', function (Blueprint $table){
    $table->bigIncrements('Id');
    $table->string('title');
    $table->timestamps();
})
```

Luego para ejecutar la migración ejecutamos:

> php artisan migrate

El nombre del modelo va en singular para que laravel cree la migración en Plural.

Creamos unos 30 posts para practicar. Entonces vamos a database/facotries/PostFactory.php

```php
$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence
    ];
})
```

> php artisan
>
> Post::factory()->count(30)->create();

En web.php

```php
Use App\Models\Post;

Route::get('eloquent', function(){
    // Para obtener todos los datos es all
    //$posts = Post::all();
    // Para hacer un where y necesitaríamos hacer un get
    //$posts = Post::where('id', '>=', '20')->get()
    // Podemos ordenar también
    //$posts = Post::where('id', '>=', '20')->orderBy('id', 'desc')->get();
    // Podemos tambien limitar a un número determinado de registros con take
    $posts = Post::where('id', '>=', '20')
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();
    foreach ($posts as $post) {
        echo "$post->id $post->title <br>";
    }
});
```

## RELACIONES DE TABLAS

Podemos volver a modificar las migraciones para modificar el esquema.

```php
Schema::create('posts', function (Blueprint $table){
    $table->bigIncrements('Id');
    $table->unsignedBigInteger('user_id');
    $table->string('title');

    //Aquí es en donde creamos la relación
    $table->foreign('user_id')->references('id')->on('users');

    $table->timestamps();
})
```

Habría que hacer un php artisan migrate:refresh proque un migrate normal solo funciona si hay archivos nuevos.

> php artisan migrate:refresh

Pero al ejecutar artisan migrate:refresh se borrarán los datos que se cargaron con tinker. Entonces podemos agregar los comandos de tinker al database/seedersDatabaseSeeder.php

```php
public function run ()
{
    User::factory()->count(4)->create();
    Post::factory()->count(30)->create();
}
```

También necesitaríamos modificar nuestro PostFactory.php

```php
$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id', => rand(1, 4),
        'title' => $faker->sentence
    ];
})
```

Y ahora si ejecutamos:

> php artisan migrate:refresh --seed

En el modelo User.php también es necesario especificar la relación:

```php
public function posts()
{
    return $this->hasMany(Post::class)
}
```

Y el modelo de Posts.php también hay que especificarlo:

```php
class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class)
    }
}
```

En web.php podemos agregar otro método

```php
...

// ::get() y ::all() hacen lo mismo, usados como en este momento.

Route::get('posts', function() {
    $posts = Post::get();
    foreach ($posts as $post){
        echo "$post->id
            <strong>{ $post->user->name }</strong>
            $post->title <br>";
    }
});

use App\Models\User;

Route::get('users', function() {
    $users = User::all();
    foreach ($users as $user){
        echo "$user->id
            <strong>$user->name</strong>
            { $user->posts->count() } posts<br>";
    }
});
```

## COLECCIONES Y SERIALIZACIÓN DE DATOS

Respecto a colecciones nos referimos a un conjunto de datos con mucha información y laravel proporciona metodos interesantes para trabajar con ellos.

Y con serialización nos referimos tratar estas colecciones y retornarlas como arreglos o json.

Podemos modificar el web.php:

```php
...
Route::get('collections', function() {
    $users = User::all();
    //dd($users)
    //dd($users->contains(4));
    //dd($users->except([1, 2, 3]));
    //dd($users->only(4));
    //dd($users->find(4));

    //Para traer tambien los posts ya que existe una relación.
    dd($users->load('posts'));
});

Route::get('seriaziation', function() {
    $users = User::all();

    // dd($users->toArray());
    $user = $users->find(1);
    // dd($user)
    dd($user->toJson())
});
```

## FORMATO DE VALORES EN TABLAS Y PRESENTACIÓN DE DATOS

Para configurar en nuestro sistema que los datos se guarden con el formato que le definimos.

Para esto trabajamos en el Modelo Users.php

```php
...

public function getGetNameAttribute(){
    return strtoupper($this->name);
}
```

Y en Post.php

```php
public function getGetTitleAttribute(){
    return strtoupper($this->title);
}
```

Ahora en las rutas podemos utilizar get_name para obtener el dato con el formato que definimos, en web.php:

```php
Route::get('posts', function() {
    $posts = Post::get();
    foreach ($posts as $post){
        echo "$post->id
            <strong>{ $post->user->get_name }</strong>
            $post->get_title <br>";
    }
});

use App\Models\User;

Route::get('users', function() {
    $users = User::all();
    foreach ($users as $user){
        echo "$user->id
            <strong>$user->get_name</strong>
            { $user->posts->count() } posts<br>";
    }
});
```

Esos fueron Getters, ahora puedo trabajar con los Setters en User.php

```php
...

public function setNameAttribute($value){
    $this->attributes['name'] = strtolower($value);
}
```

Y en Post.php

```php
...
public function setTitleAttribute($value){
    $this->attributes['title'] = strtolower($value);
}
```

Si volvemos a ejecutar el comando de migración:

> php artisian migrate:refresh --send

# CREAR PLATZIPRESS

## PROYECTO BLOG: PRESENTACIÓN Y CONFIGURACIÓN INICIAL

Para crear un nuevo proyecto incluyendo autorización.

> laravel new basic-new --auth
>
> cd basic-new
>
> code .

Luego también ejecutamo este comando para crear un nuevo modelo, migración, factory y controlador:

> php artisan make:model -mfc Post

Ahora vamos a instalar un componente, buscamos en packagist eloquent-slug.

> composer require cviebrock/eloquent-sluggable

Entonces en Post.php:

```php
namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ]
    }
}
```

El slug es para que cuando demos click en un post el titulo se convierta en un slug (todo minusculas y guiones) y sea la url del post.

## CREACIÓN DE TABLAS, ENTIDADES Y DATOS DE PRUEBA

Se trabaja en el archivo de migrations de post, en el seeder y en el PostFactory.

## PLANTILLAS DE TRABAJO Y ENTENDIENDO EL LOGIN

Se trabaja en web.php y debemos crear el controlador de posts con:

> php artisan make:controller PageController

Y trabajamos en PageController.php

También definimos las relaciones en los modelos User.php y Post.php

Las vistas no existen aún, así que hay que crearlas, creamos los archivos: post.blade.php y posts.blade.php

## VISTA INDEX Y BOTONES DE ACCIÓN

Borramos el PostController.php y lo creamos de nuevo con php artisan

> php artisan make:controller backend/PostController --resource --model=Post

Esto para tener organizado por carpetas las partes que deberían ser publicas y las privadas.

Y también trabajamos en el index.blade.php

## IMPLEMENTACIÓN DEL FORMULARIO DE CREACIÓN

Trabajamos en el archivo posts/create.blade.php

## IMPLEMENTACIÓN DEL GUARDADO

Creamos una request con php artisan:

> php artisan make:request PostRequest

Y trabajamos en ./app/Http/Request/PostRequest.php

También en el PostController.php

## CREANDO LA FUNCIÓN DE EDITAR UN POST

Seguimos trabajando en nuestro PostController.php

## ACTUALIZANDO NUESTROS POSTS

El proceso es más o menos iterativo. Crear Ruta -> Crear Controlador -> Crear Vista.

Seguimos trabajando en el PostController:

- La función destroy (Para elminar.)
- La función update

## INTEGRANDO CONTENIDO AUDIOVISUAL

En esta sección se trabaja en las páginas:

- posts.blade.php
- post.blade.php

Se trabaja en el modelo:

- Post.php para crear una función getGetImageAttribute

Se ejecuta un comando php artisan para linkear el storage en public

> php artisan storage:link

# CONSTRUIR PROYECTO FINAL: API CON TDD (INTERMEDIO)

## INTRODUCCIÓN AL TESTING

Un programador verdaderamente profesional utiliza Testing...

> laravel new api

Laravel viene preparado para trabajar con pruebas, todo empieza con el archivo phpunit.xml. En ester archivo vienen los test suites.

```
    <testsuites>
        <testsuite name="Unit">
            <directory suffix="Test.php">./tests/Unit</directory>
        </testsuite>
        <testsuite name="Feature">
            <directory suffix="Test.php">./tests/Feature</directory>
        </testsuite>
    </testsuites>
```

Están los "Unit" para las pruebas unitarias y están los "Feature" para las pruebas funcionales. En la carpeta ./tests, unos están en Unit y los otros están en Feature.

Una prueba unitaria es aquella que nos ayuda a probar una pequeña pieza de código. Por ejemplo, si queremos probar una función.

Las pruebas funcionales son cuando estámos probando un todo. Por ejemplo, si vamos a probar desde la ruta, estámos probando varias cosas... que llegue a la ruta, que funcione el controlador y que el estatus sea el correcto.

Vamos a estar revisando nuestro sistema desde la terminal y no desde el navegador. Existe el comando para crear test:

Este comando va a crear un test dentro de los test funcionales.

> php artisan make:test UserTest

Este comando va a crear un test dentro de los test unitarios.

> php artisan make:test UserTest --unit

Si queremos ejecutar los tests, lo hacemos con el siguiente comando:

> vendor/bin/phpunit

## METODOLOGÍA TDD Y TESTING HTTP

**Testing HTTP**: Probar los accesos HTTP, pero si estamos haciendolo con testing automatizado, ya no estamos utilizando el navegador.

**TDD**: Test Driven Develpment. Desarrollo guiado por pruebas, es una práctica de ingeniería de software que involucra otras dos prácticas: Escribir las pruebas primero (Test First Development) y REfactorización (Refactoring).

1. El primer paso se llama **RED**, consiste en escribir un test que falle. Escribimos una prueba que no tiene código creado y va a ocasionar una falla.
2. Es segundo paso consiste en construir el código más sencillo para que la prueba funcione. Y pasamos al estado **GREEN**.
3. El tercer paso es **REFACTOR**. Se trata de construir nuestro código de manera elegante y entendible para que nuestros compañeros lo entiendan, además que asegurar que la prueba siga en verde. Elimnar la redundancia.

Ejercicio:

1. Eliminemos todos los tests.
2. Ejecutemos:

> php artisan make:test PageTest
>
> ./vendor/bin/phpunit

Vamos al test y cambiamos

```php
public function test_about()
{
    $response = $this->get('\about');
    $response->assertStatus(200);
}
```

Ejecutamos:

> ./vendor/bin/phpunit

Y el test falla

Entonces tenemos que crear la ruta para que funcione el test

```php
Route::get('/about', function() {
    return view('welcome';)
});
```

Ejecutamos el test

> ./vendor/bin/phpunit

Y el test pasa.

Ahora puedo refactorizar digamos cambiando

```php
Route::view('/about', 'welcome');
```

Y volvemos a ejecutar el test

> ./vendor/bin/phpunit

Y pasa la prueba.

También exsite el comando php artisan para ejecutar los tests así:

> php artisan test

## PROYECTO API CON TDD: PRESENTACIÓN Y CONFIGURACIÓN INICIAL

Ejecutamos:

> php artisan make:test Http/Controllers/Api/PostControllerTest
>
> php artisan make:model Post -fm
>
> php artisan make:controller Api/PostController --api --model=Post

Esto me parece que es opcional. Parece que desde Laravel 6 ya viene configurado que las pruebas se hacen en memoria por default.

Creamos el archivo database.sqlite en la carpeta ./database

Y cambiamos en config/database.php la configuración para sqlite dejando:

```php
'database' => database_path('database.sqlite')
```

Si, esto viene comentado en el phpunit.xml

```xml
    <php>
        <server name="APP_ENV" value="testing"/>
        <server name="BCRYPT_ROUNDS" value="4"/>
        <server name="CACHE_DRIVER" value="array"/>
        <!-- <server name="DB_CONNECTION" value="sqlite"/> -->
        <!-- <server name="DB_DATABASE" value=":memory:"/> -->
        <server name="MAIL_MAILER" value="array"/>
        <server name="QUEUE_CONNECTION" value="sync"/>
        <server name="SESSION_DRIVER" value="array"/>
        <server name="TELESCOPE_ENABLED" value="false"/>
    </php>
```

Entonces deplano está en memoria.

## STORE CON TDD

Las funciones de test siempre deben empezar pos test\_(El nombre de lo que vamos a probar).

Entonces el test de store sería:

```php
public function test_store()
{
    $response = $this->json('POST', '/api/posts', [
        'title' => 'El post de prueba',
        'body' => 'El contenido'
    ]);
    $response->assertJsonStructure(['id', 'title', 'created_at', 'updated_at'])
        ->assertJson(['title' => 'El post de prueba'])
        ->assertStatus(201); // Ok, creado un recurso
    $this->assertDatabaseHas('posts', ['title' => 'El post de prueba'])
}
```

La prueba falla obviamente. Porque hay que hacer:

1. Las migraciones.
2. Las el modelo Post.php
3. El PostController.php

## REFACTORIZACIÓN Y VALIDACIÓN EN STORE

El PosController se puede refactorizar.

Podemos agregar un test para validar el título.

Esta validación se hace creando una Request así que...

> php artisan make:request PostRequest

## SHOW CON TDD

## UPDATE Y VALIDACIÓN CON TDD

El método store es muy parecido al método update.

Se puede ejecutar:

> ./vendor/bin/phpunit --filter test_update

Para solo realizar un test, por si estamos probando un sistema demasiado grande.

## DELETE CON TDD

## INDEX CON TDD

## PROTECCIÓN DE UNA API CON LOGIN

## CIERRE DEL CURSO
