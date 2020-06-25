# Laravel
ララベル実践

## 環境
php + Sqlite



# ローカルで確認する

## 前提
php --version
composer --version
laravel -v

git clone . .
cp .env.example ./.env
touch ./database/database.sqlite

composer install

php artisan --version
php artisan key:generate
php artisan storage:link
// php artisan migrate



- cd server_path
- git clone repository_path/repository.git .
- php ~/composer.phar install
- cp .env.example .env
- php artisan key:generate
- cd database
- touch database.sqlite
- php artisan migrate
- php artisan storage:link
