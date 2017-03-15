<table class="table table-responsive" id="paypalOrders-table">
    <thead>
        <th>User Id</th>
        <th>Payment Id</th>
        <th>Amount</th>
        <th>User Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($paypalOrders as $paypalOrder)
        <tr>
            <td>{!! $paypalOrder->user_id !!}</td>
            <td>{!! $paypalOrder->payment_id !!}</td>
            <td>{!! $paypalOrder->amount !!}</td>
            <td>{!! $paypalOrder->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['paypalOrders.destroy', $paypalOrder->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('paypalOrders.show', [$paypalOrder->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('paypalOrders.edit', [$paypalOrder->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>