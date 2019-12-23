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
