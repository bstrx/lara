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
    {!! Form::label('tag_list', 'Tags: ') !!}
    {!! Form::select('tag_list[]', $tags, null, ['multiple' => 'multiple']) !!}
</div>

<div>
{!! Form::submit($submitButtonText) !!}
</div>


