@extends('layouts.admin')

@section('content')
    <div class="container">
       
        {!! Form::open(['route' => 'carousels.store', 'files' => true , 'enctype' => 'multipart/form-data']) !!}

            @include('admin.carousel.partials.form')

        {!! Form::close() !!}
                
    </div>

@endsection
