
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project
Creating RESTful APIs in Laravel with PHP is a core feature of Laravel, and it's made very smooth with built-in tools like Resource Controllers, Routing, Eloquent, and Request Validation.

### API

'index function','GET Method'  api/products/
'show function' ,'GET Method'  api/products/{id}

'store function' ,'POST Method'  api/products/
 {
    "name":"SurExcel",
    "price":1190
 }
 HEADER: Accept->application/json

'update function' ,'PATCH Method'  api/products/
 {
    "name":"SurExcel",
    "price":1190
 }
 HEADER: Accept->application/json

 'destroy function' ,'DELETE Method'  api/products/{id}
 
-To add the resource file for Product. Run folloing command. 

php artisan make:resource ProductResource
In app\Http\Resources\ProductResource.php
return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'created_at' => $this->created_at->diffForHumans(),
        ];
 
