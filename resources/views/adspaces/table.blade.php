<table class="table table-responsive" id="adspaces-table">
    <thead>
        <th>Name</th>
        <th>Adblock Id</th>
        <th>Order</th>
        <th>Position</th>
        <th>Route</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($adspaces as $adspace)
        <tr>
            <td>{!! $adspace->name !!}</td>
            <td>{!! $adspace->adblock_id !!}</td>
            <td>{!! $adspace->order !!}</td>
            <td>{!! $adspace->position !!}</td>
            <td>{!! $adspace->route !!}</td>
            <td>
                {!! Form::open(['route' => ['adspaces.destroy', $adspace->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('adspaces.show', [$adspace->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('adspaces.edit', [$adspace->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>