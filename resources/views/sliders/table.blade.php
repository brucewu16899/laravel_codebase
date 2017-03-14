<table class="table table-responsive" id="sliders-table">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Path</th>
        <th>File Name</th>
        <th>File Size</th>
        <th>Order</th>
        <th>Lang</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($sliders as $slider)
        <tr>
            <td>{!! $slider->title !!}</td>
            <td>{!! $slider->description !!}</td>
            <td>{!! $slider->path !!}</td>
            <td>{!! $slider->file_name !!}</td>
            <td>{!! $slider->file_size !!}</td>
            <td>{!! $slider->order !!}</td>
            <td>{!! $slider->lang !!}</td>
            <td>
                {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sliders.show', [$slider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sliders.edit', [$slider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>