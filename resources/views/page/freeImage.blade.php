@extends('app')

@section('title', '画像アップ')

@section('content')
<h1>画像をアップロードするだけのページ</h1>
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
    <p>選択（100KBまで）</p>
    <form class="form-inline" method="POST" action="freeImage" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <button type="submit" class="btn btn-primary mb-2">アップロードする</button>
    </form>
</section>

<section>
    <p>表示</p>
    <div class="container">
        <div class="row">
        @foreach ($images as $img)
        <div class="col-3">
            <img src="{{ asset($img) }}" alt="" class="img-thumbnail rounded-circle" srcset="">
        </div>
        @endforeach
        </div>
    </div>
</section>

<section>
    <p>保存管理はせずランダム表示</p>
    <ol>
        <li>保存先のディレクトリを作成</li>
        <li>参照できるよう設定: php artisan storage:link</li>
    </ol>
</section>
@endsection