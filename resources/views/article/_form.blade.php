<div>
    {!! Form::label('title', 'Title: ') !!}
    {!! Form::text('title', null) !!}
</div>
<div>
    {!! Form::label('body', 'Body: ') !!}
    {!! Form::textarea('body', null) !!}
</div>
<div>
    {!! Form::label('published_at', 'Published On: ') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d')) !!}
</div>

<div>
{!! Form::submit($submitButtonText) !!}
</div>


