@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Form Post
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($formPost, ['route' => ['formPosts.update', $formPost->id], 'method' => 'patch']) !!}

                        @include('form_posts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection