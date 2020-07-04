@extends('app')

@section('title', '管理用、記事投稿')

@section('content')
<strong>【管理用】</strong>
<a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


<p>
<a class="" href="/blog/post">記事一覧へ</a>
</p>
<p>記事投稿</p>


@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('body')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


<form action="/blog/post" method="post">
@csrf

@isset($data->id)
<input type="hidden" name="id" value="{{ $data->id }}">
<p>ID: {{ $data->id }}</p>
@endisset

<p>
<label for="title">タイトル</label>
<input type="text" name="title" id="title" value="@isset($data->title) {{ $data->title }} @endisset">
</p>


<p>
<label for="body">本文</label>
<br>
<textarea name="body" id="body" cols="30" rows="10">@isset($data->body) {{ $data->body }} @endisset</textarea>
</p>

<input type="submit" value="投稿">

</form>

@endsection