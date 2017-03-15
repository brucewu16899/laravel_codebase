<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $actionType->id !!}</p>
</div>

<!-- Source Type Field -->
<div class="form-group">
    {!! Form::label('source_type', 'Source Type:') !!}
    <p>{!! $actionType->source_type !!}</p>
</div>

<!-- Action Field -->
<div class="form-group">
    {!! Form::label('action', 'Action:') !!}
    <p>{!! $actionType->action !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $actionType->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $actionType->updated_at !!}</p>
</div>

