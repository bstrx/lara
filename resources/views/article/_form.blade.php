<div>
    {!! Form::label('title', 'Title: ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div>
    {!! Form::label('body', 'Body: ') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div>
    {!! Form::label('published_at', 'Published On: ') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div>
    {!! Form::label('tag_list', 'Tags: ') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'multiple' => 'multiple', 'class' => 'form-control']) !!}
</div>

<div>
{!! Form::submit($submitButtonText) !!}
</div>

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder: 'Choose your tag',
            tags: true,
            ajax: {
                dataType: 'json',
                url: 'api/tags',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term
                    }
                }
            }
        });
    </script>
@endsection

