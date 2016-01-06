<div class="form-group">
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! Form::label('title', 'Title:') !!}

</div>
<div class="form-group">
    {!! Form::textarea('body', 'published_at', null, ['class' => 'form-control']) !!}
    {!! Form::label('body', 'Title:') !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn primary form-control']) !!}
</div>
<div class="form-group">
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    {!! Form::label('published_at', 'Publish On:') !!}
</div>