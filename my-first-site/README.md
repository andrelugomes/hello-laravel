# hello-laravel


## MySQL

```bash
docker run -p 3306:3306 --name mysql-laravel -e MYSQL_ROOT_PASSWORD=password -d mysql:8 mysqld --default-authentication-plugin=mysql_native_password

docker exec -it mysql-laravel bash
```
