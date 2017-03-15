<table class="table table-responsive" id="companyFeatures-table">
    <thead>
        <th>Company Id</th>
        <th>Description</th>
        <th>Company Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($companyFeatures as $companyFeature)
        <tr>
            <td>{!! $companyFeature->company_id !!}</td>
            <td>{!! $companyFeature->description !!}</td>
            <td>{!! $companyFeature->company_id !!}</td>
            <td>
                {!! Form::open(['route' => ['companyFeatures.destroy', $companyFeature->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('companyFeatures.show', [$companyFeature->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('companyFeatures.edit', [$companyFeature->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>