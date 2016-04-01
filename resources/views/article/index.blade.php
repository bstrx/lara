@extends('layout')

@section('content')
    <h1>All articles</h1>
    @foreach($articles as $article)
        <h1><a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a></h1>
        <div>{{ $article->body }}</div>
    @endforeach
@endsection