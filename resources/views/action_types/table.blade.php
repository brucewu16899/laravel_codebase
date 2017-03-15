<table class="table table-responsive" id="actionTypes-table">
    <thead>
        <th>Source Type</th>
        <th>Action</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($actionTypes as $actionType)
        <tr>
            <td>{!! $actionType->source_type !!}</td>
            <td>{!! $actionType->action !!}</td>
            <td>
                {!! Form::open(['route' => ['actionTypes.destroy', $actionType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('actionTypes.show', [$actionType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('actionTypes.edit', [$actionType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>