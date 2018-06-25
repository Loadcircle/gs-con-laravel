@extends('layouts.admin')

@section('content')
    <div class="container">
       
        {!! Form::open(['route' => 'sections.store', 'files' => true , 'enctype' => 'multipart/form-data']) !!}

            @include('admin.section.partials.form')

        {!! Form::close() !!}
                
    </div>

@endsection
