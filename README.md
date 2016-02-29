# SquarERP
A global ERP create in Laravel and PHP.

Nuestra intención es crear un [ERP] ( https://es.wikipedia.org/wiki/Sistema_de_planificaci%C3%B3n_de_recursos_empresariales ), para las pequeñas y medianas empresas.

El proyecto se basa en dos pilares fundamentales el framework [Laravel] ( https://laravel.com/ ) y [Polymer] ( https://www.polymer-project.org/ ).

Por tanto el lenguaje de programación elegido es PHP, y seguimos las mismas normas de Laravel para la creación del codigo fuente.

Seguimos la codificación [PSR-2] (https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md ), y [PSR-4] ( https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md ) como estandar para autoloading.

Bases de datos.

Para el desarrollo usamos la base de datos "homestead"

```php
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'localhost'),
            'database'  => env('DB_DATABASE', 'homestead'),
            'username'  => env('DB_USERNAME', 'root'),
            'password'  => env('DB_PASSWORD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
```

Para la creación de la base de datos de desarrollo.

```php
php artisan migrate
```

Para los test utilizamos sqlite 
 
```php
     'sqlite' => [
         'driver'   => 'sqlite',
         'database' => storage_path('database.sqlite'),
         'prefix'   => '',
     ],
``` 

Para la creación de la base de datos de test

```php
php artisan migrate --database=sqlite
```

Gestool team.
