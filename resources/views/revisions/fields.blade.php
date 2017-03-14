<!-- Revisionable Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('revisionable_type', 'Revisionable Type:') !!}
    {!! Form::text('revisionable_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Revisionable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('revisionable_id', 'Revisionable Id:') !!}
    {!! Form::text('revisionable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Old Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('old_value', 'Old Value:') !!}
    {!! Form::text('old_value', null, ['class' => 'form-control']) !!}
</div>

<!-- New Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('new_value', 'New Value:') !!}
    {!! Form::text('new_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('revisions.index') !!}" class="btn btn-default">Cancel</a>
</div>
