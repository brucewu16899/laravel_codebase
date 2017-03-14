<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $participant->id !!}</p>
</div>

<!-- Thread Id Field -->
<div class="form-group">
    {!! Form::label('thread_id', 'Thread Id:') !!}
    <p>{!! $participant->thread_id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $participant->user_id !!}</p>
</div>

<!-- Last Read Field -->
<div class="form-group">
    {!! Form::label('last_read', 'Last Read:') !!}
    <p>{!! $participant->last_read !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $participant->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $participant->updated_at !!}</p>
</div>

