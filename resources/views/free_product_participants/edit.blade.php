@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Free Product Participant
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($freeProductParticipant, ['route' => ['freeProductParticipants.update', $freeProductParticipant->id], 'method' => 'patch']) !!}

                        @include('free_product_participants.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection