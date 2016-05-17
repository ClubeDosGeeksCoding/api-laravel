# api-laravel
API Example using Laravel

## Install
```shell 
git clone https://github.com/ClubeDosGeeksCoding/api-laravel.git
cd api-laravel
composer install
```

## Create Database
```sql
CREATE DATABASE api;
use api;
CREATE TABLE pessoa (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	dt_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
)
```

## Configure Virtual Hosts
```xml
<VirtualHost *:80>
    DocumentRoot "CAMINHO_PARA_PASTA_DA_API"
    ServerName laravel.exemple
</VirtualHost>
```
