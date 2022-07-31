install project

```
git clone https://github.com/goje-softwares/goje-backend.git
cd goje-backend
composer install
cp .env.example .env
php artisan migrate
php artisan serve
```

## routes

# Authentication

- [ ] POST - /api/auth/register => AuthController@register => UserResource
- [ ] POST - /api/auth/login => AuthController@login => UserResource
- [ ] POST - /api/auth/logout => AuthController@logout => True Or False

## Products

- [ ] GET - /api/products => ProductController@index => ProductResource
- [ ] GET - /api/products/{product_id} => ProductController@show => ProductResource
- [ ] POST - /api/products/store => ProductController@store => ProductResource
- [ ] DELETE - /api/products/destroy => ProductController@destroy => True Or False
