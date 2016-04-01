@extends('layout')

@section('content')
    <h1>New article!</h1>

    <hr>

    {!! Form::open(['url' => 'articles']) !!}
        @include('article._form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}


@endsection