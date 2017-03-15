<table class="table table-responsive" id="products-table">
    <thead>
        <th>Category Id</th>
        <th>User Id</th>
        <th>Parent Id</th>
        <th>Products Group</th>
        <th>Status</th>
        <th>Type</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Low Stock</th>
        <th>Bar Code</th>
        <th>Brand</th>
        <th>Condition</th>
        <th>Tags</th>
        <th>Features</th>
        <th>Rate Val</th>
        <th>Rate Count</th>
        <th>Sale Counts</th>
        <th>View Counts</th>
        <th>User Id</th>
        <th>Category Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->category_id !!}</td>
            <td>{!! $product->user_id !!}</td>
            <td>{!! $product->parent_id !!}</td>
            <td>{!! $product->products_group !!}</td>
            <td>{!! $product->status !!}</td>
            <td>{!! $product->type !!}</td>
            <td>{!! $product->name !!}</td>
            <td>{!! $product->description !!}</td>
            <td>{!! $product->price !!}</td>
            <td>{!! $product->stock !!}</td>
            <td>{!! $product->low_stock !!}</td>
            <td>{!! $product->bar_code !!}</td>
            <td>{!! $product->brand !!}</td>
            <td>{!! $product->condition !!}</td>
            <td>{!! $product->tags !!}</td>
            <td>{!! $product->features !!}</td>
            <td>{!! $product->rate_val !!}</td>
            <td>{!! $product->rate_count !!}</td>
            <td>{!! $product->sale_counts !!}</td>
            <td>{!! $product->view_counts !!}</td>
            <td>{!! $product->user_id !!}</td>
            <td>{!! $product->category_id !!}</td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>