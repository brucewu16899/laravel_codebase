<table class="table table-responsive" id="messengerThreads-table">
    <thead>
        <th>Subject</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($messengerThreads as $messengerThread)
        <tr>
            <td>{!! $messengerThread->subject !!}</td>
            <td>
                {!! Form::open(['route' => ['messengerThreads.destroy', $messengerThread->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('messengerThreads.show', [$messengerThread->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('messengerThreads.edit', [$messengerThread->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>