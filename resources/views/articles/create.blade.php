@extends('app')

@section('content')
    <h1>Write a New Article</h1>

    <hr/>

    {!! Form::open([url => 'articles'])
     !!}
    <div class="form-group">
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! Form::label('title', 'Title:') !!}

    </div>
    <div class="form-group">
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        {!! Form::label('body', 'Title:') !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Article', ['class' => 'btn btn primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop