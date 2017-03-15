<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    {!! Form::text('parent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Products Group Field -->
<div class="form-group col-sm-6">
    {!! Form::label('products_group', 'Products Group:') !!}
    {!! Form::text('products_group', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Low Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('low_stock', 'Low Stock:') !!}
    {!! Form::text('low_stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control']) !!}
</div>

<!-- Features Field -->
<div class="form-group col-sm-6">
    {!! Form::label('features', 'Features:') !!}
    {!! Form::text('features', null, ['class' => 'form-control']) !!}
</div>

<!-- Rate Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rate_count', 'Rate Count:') !!}
    {!! Form::text('rate_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Sale Counts Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_counts', 'Sale Counts:') !!}
    {!! Form::text('sale_counts', null, ['class' => 'form-control']) !!}
</div>

<!-- View Counts Field -->
<div class="form-group col-sm-6">
    {!! Form::label('view_counts', 'View Counts:') !!}
    {!! Form::text('view_counts', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::text('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
