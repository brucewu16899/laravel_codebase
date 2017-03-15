@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Virtual Product Order
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($virtualProductOrder, ['route' => ['virtualProductOrders.update', $virtualProductOrder->id], 'method' => 'patch']) !!}

                        @include('virtual_product_orders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection