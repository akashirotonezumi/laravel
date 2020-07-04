@extends('app')

@section('title', 'Blog')

@section('content')
<h1>ブログてきなページ</h1>

<nav>
<a class="" href="/blog/post/create">投稿ページへ</a>
</nav>




<section>
    <div class="container">
        <hr>
        @foreach ($data as $d)
        <div>
        <h2>{{ $d->title }}</h2>
        <p>
            <small>{{ $d->created_at->format('Y/m/d H:i') }}</small>
            <br>
            {!! nl2br(e($d->body)) !!}
        </p>
        </div>
        <hr>
        @endforeach
    </div>

    {{ $data->links() }}


</section>


<section>
    <p>直接操作</p>
    <code>
    $ php artisan tinker
    </code>
    <code>
    App\Blog::count(); <br>
    App\Blog::get(); <br>
    App\Blog::first();
    </code>
    <p>レコード削除</p>
    <code>
    App\Blog::truncate()
    </code>
</section>

@endsection