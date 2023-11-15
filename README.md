<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About XLR8 RMS

## Requirements
- PHP 8.2
- MariaDB 10.6
- Laravel Sail

## Installation

Clone project from [Github](https://github.com/ruimiguelcosta/xlr8)
```
git clone git@github.com:ruimiguelcosta/xlr8.git
```

Run Composer
```
cd ./xlr8
composer install
```

Create a database, and setup at .env file. These definitions are in .env.example
```
DB_CONNECTION=mysql
DB_HOST=mariadb
DB_PORT=3306
DB_DATABASE=xlr8
DB_USERNAME=sail
DB_PASSWORD=password
```

Run migrations and seeds
```
./vendor/bin/sail artisan migrate --seed
```
Create symbolic link to storage/app/public
```
./vendor/bin/sail artisan storage:link
```

### Access to Hotel Frontend
```
http://localhost
```

### Access to Hotel Administration
```
http://localhost/admin
```

#### Credentials
. email: admin@admin.com
. password: secret

Have fun!

## Unit Tests
To run all the tests, run:
```
./vendor/bin/sail php artisan test
```

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
