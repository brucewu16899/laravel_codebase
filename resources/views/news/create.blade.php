@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{!! url('/admin/news') !!}"><i class="fa fa-bookmark"></i>新闻</a></li>
        <li class="active">新建新闻</li>
    </ol>
    <section class="content-header">
        <h1>新闻</h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'news.store','files'=>true]) !!}
                    @include('news.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('partials.datepicker')
    @include('partials.tinymce')
    @include('partials.imagefile')
    @include('partials.layerui')
@endsection


