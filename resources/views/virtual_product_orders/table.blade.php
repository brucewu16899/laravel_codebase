<table class="table table-responsive" id="virtualProductOrders-table">
    <thead>
        <th>Order Id</th>
        <th>Virtual Product Id</th>
        <th>Status</th>
        <th>Email</th>
        <th>Order Id</th>
        <th>Virtual Product Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($virtualProductOrders as $virtualProductOrder)
        <tr>
            <td>{!! $virtualProductOrder->order_id !!}</td>
            <td>{!! $virtualProductOrder->virtual_product_id !!}</td>
            <td>{!! $virtualProductOrder->status !!}</td>
            <td>{!! $virtualProductOrder->email !!}</td>
            <td>{!! $virtualProductOrder->order_id !!}</td>
            <td>{!! $virtualProductOrder->virtual_product_id !!}</td>
            <td>
                {!! Form::open(['route' => ['virtualProductOrders.destroy', $virtualProductOrder->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('virtualProductOrders.show', [$virtualProductOrder->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('virtualProductOrders.edit', [$virtualProductOrder->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>