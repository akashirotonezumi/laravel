@extends('app')

@section('title', 'テキスト投稿のページ')

@section('content')
<h1>テキストを入力して保存された文を一覧で表示させるページ</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<section>
    <p>入力</p>
    <form class="form-inline" method="POST" action="free">
    {{ csrf_field() }}
    <input type="text" class="form-control mb-2 mr-sm-2" name="txt" placeholder="あいうえお">
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
</section>

<section>
    <p>表示</p>
    <ul class="list-group list-group-flush">
    @foreach ($items as $txt)
        <li class="list-group-item"><span style="color:grey;">[{{ $txt->created_at->format('Y/m/d H:i') }}]</span> {{ $txt->txt }}</li>
    @endforeach
    </ul>
    {{ $items->links() }}
</section>

<section>
    <p>memo: <br>
    sqliteを使う→envに1行「DB_CONNECTION=sqlite」、ファイル生成~\database\database.sqlite</p>
    <code>
    【直接操作】 <br>
    $ php artisan tinker <br>
    App\ModelName::count(); <br>
    App\ModelName::get(); <br>
    App\ModelName::first(); <br>
    【レコード削除】 <br>
    App\ModelName::truncate() <br>
    </code>
</section>
@endsection