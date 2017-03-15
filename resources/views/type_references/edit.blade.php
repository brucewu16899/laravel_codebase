@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Type Reference
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($typeReference, ['route' => ['typeReferences.update', $typeReference->id], 'method' => 'patch']) !!}

                        @include('type_references.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection