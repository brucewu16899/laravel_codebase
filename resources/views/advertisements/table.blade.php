<table class="table table-responsive" id="advertisements-table">
    <thead>
        <th>Name</th>
        <th>Adspace Id</th>
        <th>Enabled</th>
        <th>Body</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($advertisements as $advertisement)
        <tr>
            <td>{!! $advertisement->name !!}</td>
            <td>{!! $advertisement->adspace_id !!}</td>
            <td>{!! $advertisement->enabled !!}</td>
            <td>{!! $advertisement->body !!}</td>
            <td>
                {!! Form::open(['route' => ['advertisements.destroy', $advertisement->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('advertisements.show', [$advertisement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('advertisements.edit', [$advertisement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>