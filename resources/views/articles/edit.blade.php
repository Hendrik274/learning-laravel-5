@extends('app')

@section('content')
    <h1>Edit: {!! $article->title !!}</h1>
    {!! Form::open(['method' => 'PATCH'])
         !!}
        @include ('articles/form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

@include ('errors/list')
@stop