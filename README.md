## How to run 

- composer install
- Copy .env.example .env
- Create a database
- Set database credentials in .env file
- php artisan migrate:fresh --seed
- You must install intl gd PHP extensions or you can enable these extensions via PHP configuration file "php.ini"
