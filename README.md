#Instalation 

- php artisan storage:link
- php artisan migrate

#

composer require laravel/telescope
php artisan telescope:install
php artisan migrate
composer require barryvdh/laravel-debugbar --dev