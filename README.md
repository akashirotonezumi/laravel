# Laravel
ララベル実践

## 環境
php + Sqlite

## 展開手順
- cd server_path
- git clone repository_path/repository.git .
- php ~/composer.phar install
- cp .env.example .env
- php artisan key:generate
- cd database
- touch database.sqlite
- php artisan migrate
- php artisan storage:link
