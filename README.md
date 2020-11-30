# Práctica 2 de la asignatura IW
## Descripción
En este proyecto vamos a desarrollar una web farmacéutica
## Requisitos
- PHP >= 7.2.5
- Mysql-server
- Phpmyadmin
## Despliegue Laravel
- composer update
- php artisan Key:generate
- mv .env.example .env // Poner nombre base datos y usuario
- php artisan migrate:install / php artisan migrate:refresh
- php artisan serve
## Creación de base de datos
- sudo mysql -p -u root
- create database farmacia CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
- create user 'iw'@'localhost' identified by 'iw';
- GRANT ALL PRIVILEGES ON *.* TO 'iw'@'localhost';
- FLUSH PRIVILEGES;
