@extends('app')

@section('title', '管理用、記事一覧')

@section('content')
<strong>【管理用】</strong>
<a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


<p>
<a class="" href="/blog/post/create">記事投稿へ</a>
</p>
<p>記事一覧</p>



<ul class="list-group list-group-flush">
@foreach ($data as $d)
    <li class="list-group-item">
        [{{ $d->id }}] 
        <span style="color:grey;">[{{ $d->created_at->format('Y/m/d H:i') }}]</span>
        <a href="/blog/post/{{ $d->id }}/edit">{{ $d->title }}</a>
        | [<a href="/blog/post/{{ $d->id }}/del">削除</a>]
    </li>
@endforeach
</ul>
{{ $data->links() }}


@endsection