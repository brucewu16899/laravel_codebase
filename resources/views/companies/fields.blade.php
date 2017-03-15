<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Keywords Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keywords', 'Keywords:') !!}
    {!! Form::textarea('keywords', null, ['class' => 'form-control']) !!}
</div>

<!-- About Us Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about_us', 'About Us:') !!}
    {!! Form::textarea('about_us', null, ['class' => 'form-control']) !!}
</div>

<!-- Refund Policy Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('refund_policy', 'Refund Policy:') !!}
    {!! Form::textarea('refund_policy', null, ['class' => 'form-control']) !!}
</div>

<!-- Privacy Policy Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('privacy_policy', 'Privacy Policy:') !!}
    {!! Form::textarea('privacy_policy', null, ['class' => 'form-control']) !!}
</div>

<!-- Terms Of Service Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('terms_of_service', 'Terms Of Service:') !!}
    {!! Form::textarea('terms_of_service', null, ['class' => 'form-control']) !!}
</div>

<!-- Google Maps Key Api Field -->
<div class="form-group col-sm-6">
    {!! Form::label('google_maps_key_api', 'Google Maps Key Api:') !!}
    {!! Form::text('google_maps_key_api', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('companies.index') !!}" class="btn btn-default">Cancel</a>
</div>
