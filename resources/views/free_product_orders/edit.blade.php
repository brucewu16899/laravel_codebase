@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Free Product Order
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($freeProductOrder, ['route' => ['freeProductOrders.update', $freeProductOrder->id], 'method' => 'patch']) !!}

                        @include('free_product_orders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection