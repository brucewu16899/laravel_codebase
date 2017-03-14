<table class="table table-responsive" id="photoGalleries-table">
    <thead>
        <th>Title</th>
        <th>Slug</th>
        <th>Content</th>
        <th>Is Published</th>
        <th>Lang</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($photoGalleries as $photoGallery)
        <tr>
            <td>{!! $photoGallery->title !!}</td>
            <td>{!! $photoGallery->slug !!}</td>
            <td>{!! $photoGallery->content !!}</td>
            <td>{!! $photoGallery->is_published !!}</td>
            <td>{!! $photoGallery->lang !!}</td>
            <td>
                {!! Form::open(['route' => ['photoGalleries.destroy', $photoGallery->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('photoGalleries.show', [$photoGallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('photoGalleries.edit', [$photoGallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>