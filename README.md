# Laravel
ララベル実践

## 環境
php + Sqlite



# ローカルで確認する

## 前提
```php --version```  
```composer --version```  
```laravel -v```  

## git clone . .  
```cp .env.example ./.env```  
```touch ./database/database.sqlite```  

```composer install```  

```php artisan --version```  
```php artisan key:generate```  
```php artisan storage:link```  
// php artisan migrate

## 立ち上げ
```php artisan serve```



## ほか
- ファイルからララベルバージョンを確認
    > vendor/laravel/framework/src/Illuminate/Foundation/Application.php

