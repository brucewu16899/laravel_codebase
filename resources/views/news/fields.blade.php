<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', '新闻标题') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>


<!-- datetime Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('datetime', '新闻时间') !!}
    {!! Form::text('datetime', null, ['class' => 'form-control','id'=>'cms-date-picker']) !!}
</div>

@include('partials.image_field_backup')
<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', '新闻内容') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control','id'=>'cms-rich-editor']) !!}
</div>

<!-- Is Published Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_published', '是否发布') !!}
    {{--{!! Form::checkbox('is_published', '1', true)!!}--}}
    <input type="checkbox" name="is_published" id="is_published" value="0">
</div>
{{--@include('partials.published_swtich_backup')--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('保存', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('news.index') !!}" class="btn btn-default">取消</a>
</div>


