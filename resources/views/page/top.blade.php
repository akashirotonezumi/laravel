@extends('app')

@section('title', '最初のページ')

@section('content')
<h1>環境</h1>
<h2>PHP-Laravel + SQLite</h2>

<div>
    <p>PHP 7.4</p>
    <p>
        <a class="" href="https://readouble.com/laravel/6.x/ja/installation.html" target="_blank" rel="noopener noreferrer">Laravel 6</a>
        <svg id="i-external" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
        </svg>
    </p>
    <p>Sqlite</p>
    <p>
        <a class="" href="https://getbootstrap.com/" target="_blank" rel="noopener noreferrer">Bootstrap 4</a>
        <svg id="i-external" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
        </svg>
    </p>
</div>
@endsection
