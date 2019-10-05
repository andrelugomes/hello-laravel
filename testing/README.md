
docker run -p 3306:3306 --name mysql-testting-laravel -e MYSQL_DATABASE=testing -e MYSQL_ROOT_PASSWORD=password -d mysql:8 mysqld --default-authentication-plugin=mysql_native_password

php artisan make:model Team 

php artisan make:migration create_teams_table 


./vendor/bin/phpunit tests/


Using sqlite in memory

composer require doctrine/dbal - NOK
sudo apt-get install php-sqlite3 - OK

phpunit.xml

<server name="DB_CONNECTION" value="sqlite"/>
<server name="DB_DATABASE" value=":memory:"/>

.env.testing

