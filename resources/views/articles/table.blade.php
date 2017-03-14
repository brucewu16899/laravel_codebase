<table class="table table-responsive" id="articles-table">
    <thead>
        <th>Title</th>
        <th>Content</th>
        <th>Slug</th>
        <th>Category Id</th>
        <th>Meta Keywords</th>
        <th>Meta Description</th>
        <th>Is Published</th>
        <th>Path</th>
        <th>File Name</th>
        <th>File Size</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{!! $article->title !!}</td>
            <td>{!! $article->content !!}</td>
            <td>{!! $article->slug !!}</td>
            <td>{!! $article->category_id !!}</td>
            <td>{!! $article->meta_keywords !!}</td>
            <td>{!! $article->meta_description !!}</td>
            <td>{!! $article->is_published !!}</td>
            <td>{!! $article->path !!}</td>
            <td>{!! $article->file_name !!}</td>
            <td>{!! $article->file_size !!}</td>
            <td>
                {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('articles.show', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('articles.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>