<table class="table table-responsive" id="freeProductOrders-table">
    <thead>
        <th>Freeproduct Id</th>
        <th>Order Id</th>
        <th>Order Id</th>
        <th>Freeproduct Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($freeProductOrders as $freeProductOrder)
        <tr>
            <td>{!! $freeProductOrder->freeproduct_id !!}</td>
            <td>{!! $freeProductOrder->order_id !!}</td>
            <td>{!! $freeProductOrder->order_id !!}</td>
            <td>{!! $freeProductOrder->freeproduct_id !!}</td>
            <td>
                {!! Form::open(['route' => ['freeProductOrders.destroy', $freeProductOrder->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('freeProductOrders.show', [$freeProductOrder->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('freeProductOrders.edit', [$freeProductOrder->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>