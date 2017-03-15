<table class="table table-responsive" id="typeReferences-table">
    <thead>
        <th>Name</th>
        <th>Type</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($typeReferences as $typeReference)
        <tr>
            <td>{!! $typeReference->name !!}</td>
            <td>{!! $typeReference->type !!}</td>
            <td>{!! $typeReference->status !!}</td>
            <td>
                {!! Form::open(['route' => ['typeReferences.destroy', $typeReference->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('typeReferences.show', [$typeReference->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('typeReferences.edit', [$typeReference->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>