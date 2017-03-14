<table class="table table-responsive" id="stats-table">
    <thead>
        <th>Day</th>
        <th>Register Count</th>
        <th>Thread Count</th>
        <th>Reply Count</th>
        <th>Image Count</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($stats as $stat)
        <tr>
            <td>{!! $stat->day !!}</td>
            <td>{!! $stat->register_count !!}</td>
            <td>{!! $stat->thread_count !!}</td>
            <td>{!! $stat->reply_count !!}</td>
            <td>{!! $stat->image_count !!}</td>
            <td>
                {!! Form::open(['route' => ['stats.destroy', $stat->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('stats.show', [$stat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('stats.edit', [$stat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>