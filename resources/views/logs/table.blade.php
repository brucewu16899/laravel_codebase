<table class="table table-responsive" id="logs-table">
    <thead>
        <th>Action Type Id</th>
        <th>Source Id</th>
        <th>User Id</th>
        <th>Details</th>
        <th>Action Type Id</th>
        <th>User Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($logs as $log)
        <tr>
            <td>{!! $log->action_type_id !!}</td>
            <td>{!! $log->source_id !!}</td>
            <td>{!! $log->user_id !!}</td>
            <td>{!! $log->details !!}</td>
            <td>{!! $log->action_type_id !!}</td>
            <td>{!! $log->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['logs.destroy', $log->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('logs.show', [$log->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('logs.edit', [$log->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>