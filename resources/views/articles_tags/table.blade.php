<table class="table table-responsive" id="articlesTags-table">
    <thead>
        <th>Article Id</th>
        <th>Tag Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($articlesTags as $articlesTag)
        <tr>
            <td>{!! $articlesTag->article_id !!}</td>
            <td>{!! $articlesTag->tag_id !!}</td>
            <td>
                {!! Form::open(['route' => ['articlesTags.destroy', $articlesTag->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('articlesTags.show', [$articlesTag->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('articlesTags.edit', [$articlesTag->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>