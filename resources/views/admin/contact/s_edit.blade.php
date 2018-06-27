@extends('layouts.admin')

@section('content')
    <div class="container">
       
        {!! Form::model($status, ['route' => ['c_status.update', $status->id],'name' => 'contacto', 'method' => 'PUT']) !!}

            @include('admin.contact.partials.formStatus')

        {!! Form::close() !!}
                
    </div>
@endsection
