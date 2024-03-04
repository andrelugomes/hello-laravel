# livewire 2.x

Esse repo é um estudo de algumas funcionalidades do Livewire.

Acebei incluindo um recap de como avaliar a memoria usado no PHP com algumas ferramentas:

+ Telescope https://laravel.com/docs/9.x/telescope#introduction
+ Debugbar https://github.com/barryvdh/laravel-debugbar


O que eu tive que instalar pra rodar

apt install php8.1-cli  php-curl php-xml php-common=8.1.2-1ubuntu2 php-mysql


docker run --name laravel -p 3305:3306 --net=host -e MYSQL_ROOT_PASSWORD=my-secret-pw -e MYSQL_DATABASE=laravel -d mysql



composer create-project --prefer-dist laravel/laravel livewire-2x "9.*"
composer require monolog/monolog
composer require livewire/livewire "^2.6"
composer require barryvdh/laravel-debugbar --dev
php artisan telescope:install

php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"



php artisan migrate


php artisan serve
