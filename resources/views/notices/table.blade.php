<table class="table table-responsive" id="notices-table">
    <thead>
        <th>User Id</th>
        <th>Sender Id</th>
        <th>Action Type Id</th>
        <th>Source Id</th>
        <th>Status</th>
        <th>User Id</th>
        <th>Sender Id</th>
        <th>Action Type Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($notices as $notice)
        <tr>
            <td>{!! $notice->user_id !!}</td>
            <td>{!! $notice->sender_id !!}</td>
            <td>{!! $notice->action_type_id !!}</td>
            <td>{!! $notice->source_id !!}</td>
            <td>{!! $notice->status !!}</td>
            <td>{!! $notice->user_id !!}</td>
            <td>{!! $notice->sender_id !!}</td>
            <td>{!! $notice->action_type_id !!}</td>
            <td>
                {!! Form::open(['route' => ['notices.destroy', $notice->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('notices.show', [$notice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('notices.edit', [$notice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>