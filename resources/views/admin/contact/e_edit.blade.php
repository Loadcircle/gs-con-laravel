@extends('layouts.admin')

@section('content')
    <div class="container">
       
        {!! Form::model($email, ['route' => ['emails.update', $email->id],'name' => 'contacto', 'method' => 'PUT']) !!}

            @include('admin.contact.partials.formEmail')

        {!! Form::close() !!}
                
    </div>
@endsection
