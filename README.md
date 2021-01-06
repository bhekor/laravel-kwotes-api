<p align="center"><a href="https://bhekormedia.site" target="_blank"><img src="https://user-images.githubusercontent.com/10033255/103141175-f87d7900-46f0-11eb-950c-897f3aaa6a5f.png" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Kwotes

This API created using the Laravel framework API Resource that introduced in version 5.5.

**API Protection:** JWT Authentication

### To use

Setup your database in the `.env` file

```php
# migrate your tables
>> php artisan migrate

# some default data
>> php artisan db:seed
```

### Installing the JWT Auth package

```php
# Installing the JWT Auth package
>> composer require tymon/jwt-auth:dev-develop --prefer-source

# Publishing the asseta
>> php artisan vendor:publish Tymon\JWTAuth\Providers\LaravelServiceProvider

# Generating your secret key (.env)
>> php artisan jwt:secret
```

### The Endpoints (API)

```php
# to get all kwotes (GET, POST, PUT/PATCH)
/api/v1/kwotes/

# to get single kwote (GET)
/api/v1/kwotes/{id}
```

### The Endpoints (AUTH)

```php
# endpoints for the jwt authentication
/api/auth/login # POST

/api/auth/register # POST

/api/auth/profile # GET

/api/auth/logout # POST

/api/auth/refresh # POST
```

## Contributing

This is a personal project, however you can contribute to it in any way see fit

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
