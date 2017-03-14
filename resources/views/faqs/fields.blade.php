<!-- Anwser Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('anwser', 'Anwser:') !!}
    {!! Form::textarea('anwser', null, ['class' => 'form-control']) !!}
</div>

<!-- Lang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lang', 'Lang:') !!}
    {!! Form::text('lang', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('faqs.index') !!}" class="btn btn-default">Cancel</a>
</div>
