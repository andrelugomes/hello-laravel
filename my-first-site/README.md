# hello-laravel


## MySQL

```bash
docker run -p 3306:3306 --name mysql-laravel -e MYSQL_DATABASE=laravel -e MYSQL_ROOT_PASSWORD=password -d mysql:8 mysqld --default-authentication-plugin=mysql_native_password

docker exec -it mysql-laravel bash
```

## SonarQube

https://github.com/rogervila/php-sonarqube-scanner

https://github.com/SonarSource/sonar-scanner-cli
https://docs.sonarqube.org/latest/analysis/scan/sonarscanner/

```bash
docker run -d -p 9000:9000 -p 9092:9092 owasp/sonarqube

composer require rogervila/php-sonarqube-scanner --dev

vendor/bin/sonar-scanner
```

http://localhost:9000
