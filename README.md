# Laravel
ララベル実践

## 環境
PHP + Sqlite



# ローカルで確認する

## 前提
```php --version```  
```composer --version```  

## phpの設定
php.iniで
- extension=pdo_sqlite
- extension=fileinfo

のコメント化を外しておく


## git clone . .  
```cp .env.example ./.env```  
```touch ./database/database.sqlite```  

```composer install```  

```
php artisan --version
php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan db:seed
```

## 立ち上げ
```
php artisan serve
```

### アクセス
http://127.0.0.1:8000



## ほか
- ファイルからララベルバージョンを確認
    > vendor/laravel/framework/src/Illuminate/Foundation/Application.php
- マイグレ追加して流す前にリセット  
    php artisan migrate:reset
- seeder  
    php artisan db:seed
- seeder 追加したなら  
    composer dump-autoload

 
- sqlite削除リセット  
```
rm ./database/database.sqlite  
touch ./database/database.sqlite  
php artisan migrate  
php artisan db:seed  
```

