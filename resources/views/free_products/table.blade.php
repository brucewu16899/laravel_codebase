<table class="table table-responsive" id="freeProducts-table">
    <thead>
        <th>User Id</th>
        <th>Description</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Participation Cost</th>
        <th>Min Participants</th>
        <th>Max Participants</th>
        <th>Max Participations Per User</th>
        <th>Draw Number</th>
        <th>Draw Date</th>
        <th>Status</th>
        <th>User Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($freeProducts as $freeProduct)
        <tr>
            <td>{!! $freeProduct->user_id !!}</td>
            <td>{!! $freeProduct->description !!}</td>
            <td>{!! $freeProduct->start_date !!}</td>
            <td>{!! $freeProduct->end_date !!}</td>
            <td>{!! $freeProduct->participation_cost !!}</td>
            <td>{!! $freeProduct->min_participants !!}</td>
            <td>{!! $freeProduct->max_participants !!}</td>
            <td>{!! $freeProduct->max_participations_per_user !!}</td>
            <td>{!! $freeProduct->draw_number !!}</td>
            <td>{!! $freeProduct->draw_date !!}</td>
            <td>{!! $freeProduct->status !!}</td>
            <td>{!! $freeProduct->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['freeProducts.destroy', $freeProduct->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('freeProducts.show', [$freeProduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('freeProducts.edit', [$freeProduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>