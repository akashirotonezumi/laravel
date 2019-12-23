@extends('app')

@section('title', 'YAML')

@section('content')
<h1>構造化されたデータを使うページ</h1>

<section>
    <p>表示</p>
    <ul class="list-group list-group-flush">
    @foreach ($data as $yaml)
        <li class="list-group-item">{{ $yaml['name'] }}の趣味は{{ $yaml['hobby'] }}です。</li>
    @endforeach
    </ul>
</section>

<section>
    <ol>
        <li>Yaml: composer require symfony/yaml</li>
        <li>File: database\yaml.yml</li>
    </ol>
</section>
@endsection