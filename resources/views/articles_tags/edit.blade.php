@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Articles Tag
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($articlesTag, ['route' => ['articlesTags.update', $articlesTag->id], 'method' => 'patch']) !!}

                        @include('articles_tags.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection