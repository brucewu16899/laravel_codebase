<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $revision->id !!}</p>
</div>

<!-- Revisionable Type Field -->
<div class="form-group">
    {!! Form::label('revisionable_type', 'Revisionable Type:') !!}
    <p>{!! $revision->revisionable_type !!}</p>
</div>

<!-- Revisionable Id Field -->
<div class="form-group">
    {!! Form::label('revisionable_id', 'Revisionable Id:') !!}
    <p>{!! $revision->revisionable_id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $revision->user_id !!}</p>
</div>

<!-- Key Field -->
<div class="form-group">
    {!! Form::label('key', 'Key:') !!}
    <p>{!! $revision->key !!}</p>
</div>

<!-- Old Value Field -->
<div class="form-group">
    {!! Form::label('old_value', 'Old Value:') !!}
    <p>{!! $revision->old_value !!}</p>
</div>

<!-- New Value Field -->
<div class="form-group">
    {!! Form::label('new_value', 'New Value:') !!}
    <p>{!! $revision->new_value !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $revision->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $revision->updated_at !!}</p>
</div>

