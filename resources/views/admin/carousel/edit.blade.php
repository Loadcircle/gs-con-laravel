@extends('layouts.admin')

@section('content')
    <div class="container">
       
        {!! Form::model($carousel, ['route' => ['carousels.update', $carousel->id],'name' => 'contacto', 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}

            @include('admin.carousel.partials.form')

        {!! Form::close() !!}
                
    </div>
@endsection
