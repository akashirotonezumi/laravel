<?php

// Top
Route::view('/', 'page.top')->name('top');

// テキスト投稿
Route::get('/free', 'FreeTextController@index')->name('freeText');
Route::post('/free', 'FreeTextController@store');

// 構造化データを使う
Route::get('/yaml', 'YamlController')->name('yaml');

// 画像をアップロードする
Route::get('/freeImage', 'FreeImageController@index')->name('freeImage');
Route::post('/freeImage', 'FreeImageController@upload');

// ブログの表示
Route::get('/blog', 'BlogController')->name('blog');

// ブログの投稿
Route::resource('/blog/post', 'BlogPostController')->only([
    'index', 'create', 'store', 'edit',
]);
Route::get('/blog/post/{id}/del', 'BlogPostController@destroy');

// 認証
Auth::routes(['register' => false]);
