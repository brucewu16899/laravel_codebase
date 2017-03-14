<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $advertisement->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $advertisement->name !!}</p>
</div>

<!-- Adspace Id Field -->
<div class="form-group">
    {!! Form::label('adspace_id', 'Adspace Id:') !!}
    <p>{!! $advertisement->adspace_id !!}</p>
</div>

<!-- Enabled Field -->
<div class="form-group">
    {!! Form::label('enabled', 'Enabled:') !!}
    <p>{!! $advertisement->enabled !!}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{!! $advertisement->body !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $advertisement->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $advertisement->updated_at !!}</p>
</div>

