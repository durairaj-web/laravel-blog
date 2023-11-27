# Blog Management
Laravel Framework with Breeze.

## Features
- Manage users.
- Manage posts.
- Manage roles.

## How to use
1. Run `git clone https://github.com/durairaj-web/laravel-blog` to clone the repository.
2. Run `composer install` to install composer dependencies.
3. Copy `.env.example` to `.env` and edit the database credentials there.
4. Run `php artisan key:generate` to generate an app encryption key.
5. Run `php artisan migrate --seed` to migrate the database.

Launch the main URL. You can log in to the admin panel using the default credentials: `admin@blog.com` - `password`.