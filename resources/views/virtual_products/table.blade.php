<table class="table table-responsive" id="virtualProducts-table">
    <thead>
        <th>Product Id</th>
        <th>Key</th>
        <th>Url</th>
        <th>Amount</th>
        <th>Expiration Date</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($virtualProducts as $virtualProduct)
        <tr>
            <td>{!! $virtualProduct->product_id !!}</td>
            <td>{!! $virtualProduct->key !!}</td>
            <td>{!! $virtualProduct->url !!}</td>
            <td>{!! $virtualProduct->amount !!}</td>
            <td>{!! $virtualProduct->expiration_date !!}</td>
            <td>{!! $virtualProduct->status !!}</td>
            <td>
                {!! Form::open(['route' => ['virtualProducts.destroy', $virtualProduct->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('virtualProducts.show', [$virtualProduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('virtualProducts.edit', [$virtualProduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>