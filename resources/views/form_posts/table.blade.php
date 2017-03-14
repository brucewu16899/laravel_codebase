<table class="table table-responsive" id="formPosts-table">
    <thead>
        <th>Sender Name Surname</th>
        <th>Sender Email</th>
        <th>Sender Phone Number</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Create Ip</th>
        <th>Is Anwsered</th>
        <th>Lang</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($formPosts as $formPost)
        <tr>
            <td>{!! $formPost->sender_name_surname !!}</td>
            <td>{!! $formPost->sender_email !!}</td>
            <td>{!! $formPost->sender_phone_number !!}</td>
            <td>{!! $formPost->subject !!}</td>
            <td>{!! $formPost->message !!}</td>
            <td>{!! $formPost->create_ip !!}</td>
            <td>{!! $formPost->is_anwsered !!}</td>
            <td>{!! $formPost->lang !!}</td>
            <td>
                {!! Form::open(['route' => ['formPosts.destroy', $formPost->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('formPosts.show', [$formPost->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('formPosts.edit', [$formPost->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>