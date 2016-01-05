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
        {!! Form::textarea('body', 'published_at', null, ['class' => 'form-control']) !!}
        {!! Form::label('body', 'Title:') !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Article', ['class' => 'btn btn primary form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
        {!! Form::label('published_at', 'Publish On:') !!}
    </div>
    {!! Form::close() !!}

    @if ($errors)->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>

    @endif
@stop