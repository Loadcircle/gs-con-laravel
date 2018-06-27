@extends('layouts.admin')

@section('content')
    <div class="container">
       
        {!! Form::model($contact, ['route' => ['contacts.update', $contact->id],'name' => 'contacto', 'method' => 'PUT']) !!}

            @include('admin.contact.partials.form')

        {!! Form::close() !!}
                
    </div>
@endsection
