<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Adblock Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adblock_id', 'Adblock Id:') !!}
    {!! Form::text('adblock_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order', 'Order:') !!}
    {!! Form::text('order', null, ['class' => 'form-control']) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position', 'Position:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>

<!-- Route Field -->
<div class="form-group col-sm-6">
    {!! Form::label('route', 'Route:') !!}
    {!! Form::text('route', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('adspaces.index') !!}" class="btn btn-default">Cancel</a>
</div>
