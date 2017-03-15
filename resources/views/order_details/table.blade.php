<table class="table table-responsive" id="orderDetails-table">
    <thead>
        <th>Order Id</th>
        <th>Product Id</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Status</th>
        <th>Delivery Date</th>
        <th>Rate</th>
        <th>Rate Comment</th>
        <th>Product Id</th>
        <th>Order Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($orderDetails as $orderDetail)
        <tr>
            <td>{!! $orderDetail->order_id !!}</td>
            <td>{!! $orderDetail->product_id !!}</td>
            <td>{!! $orderDetail->price !!}</td>
            <td>{!! $orderDetail->quantity !!}</td>
            <td>{!! $orderDetail->status !!}</td>
            <td>{!! $orderDetail->delivery_date !!}</td>
            <td>{!! $orderDetail->rate !!}</td>
            <td>{!! $orderDetail->rate_comment !!}</td>
            <td>{!! $orderDetail->product_id !!}</td>
            <td>{!! $orderDetail->order_id !!}</td>
            <td>
                {!! Form::open(['route' => ['orderDetails.destroy', $orderDetail->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orderDetails.show', [$orderDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('orderDetails.edit', [$orderDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>