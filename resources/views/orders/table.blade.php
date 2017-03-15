<table class="table table-responsive" id="orders-table">
    <thead>
        <th>User Id</th>
        <th>Address Id</th>
        <th>Seller Id</th>
        <th>Status</th>
        <th>Type</th>
        <th>Description</th>
        <th>End Date</th>
        <th>Rate</th>
        <th>Rate Comment</th>
        <th>Rate Mail Send</th>
        <th>User Id</th>
        <th>Address Id</th>
        <th>Seller Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{!! $order->user_id !!}</td>
            <td>{!! $order->address_id !!}</td>
            <td>{!! $order->seller_id !!}</td>
            <td>{!! $order->status !!}</td>
            <td>{!! $order->type !!}</td>
            <td>{!! $order->description !!}</td>
            <td>{!! $order->end_date !!}</td>
            <td>{!! $order->rate !!}</td>
            <td>{!! $order->rate_comment !!}</td>
            <td>{!! $order->rate_mail_send !!}</td>
            <td>{!! $order->user_id !!}</td>
            <td>{!! $order->address_id !!}</td>
            <td>{!! $order->seller_id !!}</td>
            <td>
                {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orders.show', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('orders.edit', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>