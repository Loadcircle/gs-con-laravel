@extends('layouts.admin')

@section('content')
    <div class="container">
       
        {!! Form::model($config, ['route' => ['mains.update', $config->id],'name' => 'contacto', 'method' => 'PUT']) !!}

            @include('admin.main.partials.form')

        {!! Form::close() !!}
                
    </div>
@endsection
