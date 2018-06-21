@extends('layouts.admin')

@section('content')
    <div class="container">
       
        {!! Form::model($section, ['route' => ['sections.update', $section->id],'name' => 'contacto', 'method' => 'PUT']) !!}

            @include('admin.section.partials.form')

        {!! Form::close() !!}
                
    </div>
@endsection
