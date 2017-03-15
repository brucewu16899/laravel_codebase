@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Product Offer
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($productOffer, ['route' => ['productOffers.update', $productOffer->id], 'method' => 'patch']) !!}

                        @include('product_offers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection