<table class="table table-responsive" id="companies-table">
    <thead>
        <th>Email</th>
        <th>Contact Email</th>
        <th>Sales Email</th>
        <th>Support Email</th>
        <th>Status</th>
        <th>Name</th>
        <th>Website Name</th>
        <th>Slogan</th>
        <th>Logo</th>
        <th>Theme</th>
        <th>Phone Number</th>
        <th>Cell Phone</th>
        <th>Address</th>
        <th>State</th>
        <th>City</th>
        <th>Zip Code</th>
        <th>Website</th>
        <th>Twitter</th>
        <th>Facebook</th>
        <th>Google Plus</th>
        <th>Facebook App Id</th>
        <th>Description</th>
        <th>Keywords</th>
        <th>About Us</th>
        <th>Refund Policy</th>
        <th>Privacy Policy</th>
        <th>Terms Of Service</th>
        <th>Google Maps Key Api</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <td>{!! $company->email !!}</td>
            <td>{!! $company->contact_email !!}</td>
            <td>{!! $company->sales_email !!}</td>
            <td>{!! $company->support_email !!}</td>
            <td>{!! $company->status !!}</td>
            <td>{!! $company->name !!}</td>
            <td>{!! $company->website_name !!}</td>
            <td>{!! $company->slogan !!}</td>
            <td>{!! $company->logo !!}</td>
            <td>{!! $company->theme !!}</td>
            <td>{!! $company->phone_number !!}</td>
            <td>{!! $company->cell_phone !!}</td>
            <td>{!! $company->address !!}</td>
            <td>{!! $company->state !!}</td>
            <td>{!! $company->city !!}</td>
            <td>{!! $company->zip_code !!}</td>
            <td>{!! $company->website !!}</td>
            <td>{!! $company->twitter !!}</td>
            <td>{!! $company->facebook !!}</td>
            <td>{!! $company->google_plus !!}</td>
            <td>{!! $company->facebook_app_id !!}</td>
            <td>{!! $company->description !!}</td>
            <td>{!! $company->keywords !!}</td>
            <td>{!! $company->about_us !!}</td>
            <td>{!! $company->refund_policy !!}</td>
            <td>{!! $company->privacy_policy !!}</td>
            <td>{!! $company->terms_of_service !!}</td>
            <td>{!! $company->google_maps_key_api !!}</td>
            <td>
                {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('companies.show', [$company->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('companies.edit', [$company->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>