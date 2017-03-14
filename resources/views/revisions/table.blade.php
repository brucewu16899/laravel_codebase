<table class="table table-responsive" id="revisions-table">
    <thead>
        <th>Revisionable Type</th>
        <th>Revisionable Id</th>
        <th>User Id</th>
        <th>Key</th>
        <th>Old Value</th>
        <th>New Value</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($revisions as $revision)
        <tr>
            <td>{!! $revision->revisionable_type !!}</td>
            <td>{!! $revision->revisionable_id !!}</td>
            <td>{!! $revision->user_id !!}</td>
            <td>{!! $revision->key !!}</td>
            <td>{!! $revision->old_value !!}</td>
            <td>{!! $revision->new_value !!}</td>
            <td>
                {!! Form::open(['route' => ['revisions.destroy', $revision->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('revisions.show', [$revision->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('revisions.edit', [$revision->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>