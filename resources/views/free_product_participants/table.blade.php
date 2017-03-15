<table class="table table-responsive" id="freeProductParticipants-table">
    <thead>
        <th>Freeproduct Id</th>
        <th>User Id</th>
        <th>Status</th>
        <th>User Id</th>
        <th>Freeproduct Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($freeProductParticipants as $freeProductParticipant)
        <tr>
            <td>{!! $freeProductParticipant->freeproduct_id !!}</td>
            <td>{!! $freeProductParticipant->user_id !!}</td>
            <td>{!! $freeProductParticipant->status !!}</td>
            <td>{!! $freeProductParticipant->user_id !!}</td>
            <td>{!! $freeProductParticipant->freeproduct_id !!}</td>
            <td>
                {!! Form::open(['route' => ['freeProductParticipants.destroy', $freeProductParticipant->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('freeProductParticipants.show', [$freeProductParticipant->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('freeProductParticipants.edit', [$freeProductParticipant->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>