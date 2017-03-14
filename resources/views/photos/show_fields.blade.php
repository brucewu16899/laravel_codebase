<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $photo->id !!}</p>
</div>

<!-- File Name Field -->
<div class="form-group">
    {!! Form::label('file_name', 'File Name:') !!}
    <p>{!! $photo->file_name !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $photo->title !!}</p>
</div>

<!-- Path Field -->
<div class="form-group">
    {!! Form::label('path', 'Path:') !!}
    <p>{!! $photo->path !!}</p>
</div>

<!-- File Size Field -->
<div class="form-group">
    {!! Form::label('file_size', 'File Size:') !!}
    <p>{!! $photo->file_size !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $photo->type !!}</p>
</div>

<!-- Relationship Id Field -->
<div class="form-group">
    {!! Form::label('relationship_id', 'Relationship Id:') !!}
    <p>{!! $photo->relationship_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $photo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $photo->updated_at !!}</p>
</div>

