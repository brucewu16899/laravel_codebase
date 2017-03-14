@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Photo Gallery
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($photoGallery, ['route' => ['photoGalleries.update', $photoGallery->id], 'method' => 'patch']) !!}

                        @include('photo_galleries.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection