@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Company Feature
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($companyFeature, ['route' => ['companyFeatures.update', $companyFeature->id], 'method' => 'patch']) !!}

                        @include('company_features.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection