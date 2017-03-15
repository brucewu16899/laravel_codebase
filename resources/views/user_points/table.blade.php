<table class="table table-responsive" id="userPoints-table">
    <thead>
        <th>User Id</th>
        <th>Action Type Id</th>
        <th>Source Id</th>
        <th>Points</th>
        <th>User Id</th>
        <th>Action Type Id</th>
        <th>User Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($userPoints as $userPoint)
        <tr>
            <td>{!! $userPoint->user_id !!}</td>
            <td>{!! $userPoint->action_type_id !!}</td>
            <td>{!! $userPoint->source_id !!}</td>
            <td>{!! $userPoint->points !!}</td>
            <td>{!! $userPoint->user_id !!}</td>
            <td>{!! $userPoint->action_type_id !!}</td>
            <td>{!! $userPoint->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['userPoints.destroy', $userPoint->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userPoints.show', [$userPoint->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userPoints.edit', [$userPoint->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>