## How to run?

After Cloning the repository go to project directory

```bash
cd static-portfolio
```

Install all dependency

```bash
composer install
```

Make a copy of .env

```bash
cp .env.example .env
```

Migrate the database for session management

```bash
php artisan migrate
```

Generate app key

```bash
php artisan key:generate
```

Serve the application

```bash
php artisan serve
```
