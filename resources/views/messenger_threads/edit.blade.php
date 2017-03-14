@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Messenger Thread
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($messengerThread, ['route' => ['messengerThreads.update', $messengerThread->id], 'method' => 'patch']) !!}

                        @include('messenger_threads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection