<table class="table table-responsive" id="projects-table">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Slug</th>
        <th>Path</th>
        <th>File Name</th>
        <th>File Size</th>
        <th>Lang</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($projects as $project)
        <tr>
            <td>{!! $project->title !!}</td>
            <td>{!! $project->description !!}</td>
            <td>{!! $project->slug !!}</td>
            <td>{!! $project->path !!}</td>
            <td>{!! $project->file_name !!}</td>
            <td>{!! $project->file_size !!}</td>
            <td>{!! $project->lang !!}</td>
            <td>
                {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('projects.show', [$project->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('projects.edit', [$project->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>