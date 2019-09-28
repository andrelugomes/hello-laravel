# Core Concepts

## Dependency injection

```php
public function file(Filesystem $filesystem) 
{

}
```
### Service Container
First try to find something bind inside the Service Container

### Auto Resolving
Second try to resolve a class by name using Auto Resolving

## Service Provider

Class responsible for boot loading you code with the Laravel Framework

+ register()
    - Binding things into the Service Container
+ boot()

## configurations

+ .env

+ config()

```php
config('twitter.api.secret')) // config('CONFIG/FILE.php . ARRAY_KEY . ARRAY_KEY'))
```

### configurations cached

Create the file `bootstrap/cache/config.php `

```php
php artisan config:cache 

cat /bootstrap/cache/config.php
```

## Middleware

Logs : /storage/logs/laravel-2019-09-28.log

`App\Http\Kernel.php`

### Global Middleware (All requests)

```php
protected $middleware = [
        \App\Http\Middleware\LogRequest::class,
];
```

`[2019-09-28 19:14:15] local.INFO: Incoming request.`

### Route Middleware (Routing setup)

```php
protected $middlewareGroups = [
    'log' => [
        \App\Http\Middleware\RouteLogRequest::class,
    ]
];
```

`[2019-09-28 19:18:11] local.WARNING: Routing request.`
