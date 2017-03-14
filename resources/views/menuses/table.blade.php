<table class="table table-responsive" id="menuses-table">
    <thead>
        <th>Title</th>
        <th>Url</th>
        <th>Order</th>
        <th>Parent Id</th>
        <th>Type</th>
        <th>Option</th>
        <th>Is Published</th>
        <th>Lang</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($menuses as $menus)
        <tr>
            <td>{!! $menus->title !!}</td>
            <td>{!! $menus->url !!}</td>
            <td>{!! $menus->order !!}</td>
            <td>{!! $menus->parent_id !!}</td>
            <td>{!! $menus->type !!}</td>
            <td>{!! $menus->option !!}</td>
            <td>{!! $menus->is_published !!}</td>
            <td>{!! $menus->lang !!}</td>
            <td>
                {!! Form::open(['route' => ['menuses.destroy', $menus->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('menuses.show', [$menus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('menuses.edit', [$menus->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>