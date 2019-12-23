<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
    <script src="js/app.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav nav-tabs mr-auto">
    @section('sidebar')
    <li class="nav-item">
        <a class="nav-link" href="{{route('top')}}">環境</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('freeText')}}">テキスト投稿</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('yaml')}}">YAML</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('freeImage')}}">画像投稿</a>
    </li>
</div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>