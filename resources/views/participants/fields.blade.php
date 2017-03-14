<!-- Thread Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thread_id', 'Thread Id:') !!}
    {!! Form::text('thread_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Read Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_read', 'Last Read:') !!}
    {!! Form::text('last_read', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('participants.index') !!}" class="btn btn-default">Cancel</a>
</div>
