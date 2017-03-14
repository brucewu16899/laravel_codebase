<!-- Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day', 'Day:') !!}
    {!! Form::text('day', null, ['class' => 'form-control']) !!}
</div>

<!-- Register Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('register_count', 'Register Count:') !!}
    {!! Form::text('register_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Thread Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thread_count', 'Thread Count:') !!}
    {!! Form::text('thread_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Reply Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reply_count', 'Reply Count:') !!}
    {!! Form::text('reply_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_count', 'Image Count:') !!}
    {!! Form::text('image_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('stats.index') !!}" class="btn btn-default">Cancel</a>
</div>
