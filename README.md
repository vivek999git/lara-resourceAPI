
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

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

 

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
