# redberry-interns-swagger-guideline

I created this application as a guidline for Redberry interns.
It's easy to write messed up code in swagger, this application serves as a clean code guidline for swagger.

## Tech Stack

-   Laravel 9
-   swagger 3

## Project Setup

```sh
git clone https://github.com/BekaBadzagua/redberry-interns-swagger-guideline
```

```sh
cd redberry-interns-swagger-guideline
```

```sh
composer install
```

```sh
php artisan key:generate
```

```sh
php artisan storage:link
```

update .env configuration

```sh
php artisan migrate:fresh --seed
```

```sh
npm install
```

```sh
npm run dev
```

### Serve the Application

```sh
php artisan serve
```

## Documentation

-   [swagger 3.0](https://swagger.io/docs/specification/about/)
-   [GitBook - API-ის დოკუმენტაცია, Swagger-ის ინტეგრაცია Laravel-ში](https://redberry.gitbook.io/resources/laravel/api-is-dokumentatsia-swagger-is-integratsia-laravel-shi)

# {!} Note for Production

We've resticted access to /swagger route in web.php but it's still possible to access swagger files,
since they are in public folder.
That's why, if we realy want to restict the information we have to add restictions in nginx configuration on our production server. which is realy simple, we only have to add following code in nginx configuration for our application.

```bash
server {

 location = /api.yaml {
     deny all;
     return 403;
 }

 location ~ /_swagger/.* {
     deny all;
     return 403;
 }

}
```
