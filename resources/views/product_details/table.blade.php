<table class="table table-responsive" id="productDetails-table">
    <thead>
        <th>Name</th>
        <th>Input Type</th>
        <th>Default Values</th>
        <th>Validation Rules</th>
        <th>Help Message</th>
        <th>Type Products</th>
        <th>Max Num Values</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($productDetails as $productDetail)
        <tr>
            <td>{!! $productDetail->name !!}</td>
            <td>{!! $productDetail->input_type !!}</td>
            <td>{!! $productDetail->default_values !!}</td>
            <td>{!! $productDetail->validation_rules !!}</td>
            <td>{!! $productDetail->help_message !!}</td>
            <td>{!! $productDetail->type_products !!}</td>
            <td>{!! $productDetail->max_num_values !!}</td>
            <td>{!! $productDetail->status !!}</td>
            <td>
                {!! Form::open(['route' => ['productDetails.destroy', $productDetail->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productDetails.show', [$productDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productDetails.edit', [$productDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>