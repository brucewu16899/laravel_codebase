<!-- Sender Name Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_name_surname', 'Sender Name Surname:') !!}
    {!! Form::text('sender_name_surname', null, ['class' => 'form-control']) !!}
</div>

<!-- Sender Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_email', 'Sender Email:') !!}
    {!! Form::text('sender_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Sender Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_phone_number', 'Sender Phone Number:') !!}
    {!! Form::text('sender_phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject', 'Subject:') !!}
    {!! Form::text('subject', null, ['class' => 'form-control']) !!}
</div>

<!-- Message Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>

<!-- Create Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('create_ip', 'Create Ip:') !!}
    {!! Form::text('create_ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Anwsered Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_anwsered', 'Is Anwsered:') !!}

</div>

<!-- Lang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lang', 'Lang:') !!}
    {!! Form::text('lang', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('formPosts.index') !!}" class="btn btn-default">Cancel</a>
</div>
