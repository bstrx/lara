@extends('layout')

@section('content')
    <h1>Edit article {{ $article->title }}!</h1>

    <hr>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticleController@update', $article->id]]) !!}
        @include('article._form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}

@endsection