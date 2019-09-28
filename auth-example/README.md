# Auth Example

## Scafolding


### Laravel 6 ^

https://laravel.com/docs/6.x/authentication

```bash
composer require laravel/ui

php artisan ui vue --auth

npm install && npm run dev

docker run -p 3306:3306 --name mysql-auth-laravel -e MYSQL_DATABASE=laravel -e MYSQL_ROOT_PASSWORD=password -d mysql:8 mysqld --default-authentication-plugin=mysql_native_password

php artisan migrate
```

```env
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=password
```

