<table class="table table-responsive" id="news-table">
    <thead>
        <th>Title</th>
        <th>Content</th>
        <th>Slug</th>
        <th>Datetime</th>
        <th>Is Published</th>
        <th>Path</th>
        <th>File Name</th>
        <th>File Size</th>
        <th>Lang</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($news as $news)
        <tr>
            <td>{!! $news->title !!}</td>
            <td>{!! $news->content !!}</td>
            <td>{!! $news->slug !!}</td>
            <td>{!! $news->datetime !!}</td>
            <td>{!! $news->is_published !!}</td>
            <td>{!! $news->path !!}</td>
            <td>{!! $news->file_name !!}</td>
            <td>{!! $news->file_size !!}</td>
            <td>{!! $news->lang !!}</td>
            <td>
                {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('news.show', [$news->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('news.edit', [$news->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>