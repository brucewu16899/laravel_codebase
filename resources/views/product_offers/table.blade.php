<table class="table table-responsive" id="productOffers-table">
    <thead>
        <th>Product Id</th>
        <th>Day Start</th>
        <th>Day End</th>
        <th>Precentage</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Product Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($productOffers as $productOffer)
        <tr>
            <td>{!! $productOffer->product_id !!}</td>
            <td>{!! $productOffer->day_start !!}</td>
            <td>{!! $productOffer->day_end !!}</td>
            <td>{!! $productOffer->precentage !!}</td>
            <td>{!! $productOffer->price !!}</td>
            <td>{!! $productOffer->quantity !!}</td>
            <td>{!! $productOffer->product_id !!}</td>
            <td>
                {!! Form::open(['route' => ['productOffers.destroy', $productOffer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productOffers.show', [$productOffer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productOffers.edit', [$productOffer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>