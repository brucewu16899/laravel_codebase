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
                    {!! Form::open(['route' => 'freeProductParticipants.store']) !!}

                        @include('free_product_participants.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
