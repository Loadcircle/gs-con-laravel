@extends('layouts.admin')

@section('content')
<style>
    .tiny th, .tiny td, .tiny a, .tiny button{
        font-size: 10px
    }
</style>
<div class="container-fluid">
    <h1 class="text-center">Administrar Correos</h1>
        <hr>
        <div class="row tiny">
            <div class="col-md-6 text-center">
                <h5>Emails de Contacto</h5>
                <table class="table table-striped table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Acci&oacute;n</th>                                    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($emails as $e)
                            <tr>
                                <td>{{ $e->id }}</td>
                                <td>{{ $e->name }}</td>
                                <td>{{ $e->email }}</td>
                                <td>{{ $e->status }}</td>
                                <td>
                                    <a href="{{ route('contacts.edit', $e->id) }}" class="btn btn-sm btn-default"><img width="25px" src="{{asset('admin/image/pencil.svg')}}" alt="" srcset=""></a>       
                                    {!! Form::open(['route'=>['emails.destroy', $e->id], 'method'=>'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}                       
                                </td>
                                
                            </tr>
                       
                            @endforeach
                        </tbody>
                    </table>
                    <a class="float-right btn btn-primary" href="#" data-toggle="modal" data-target="#e_create">Agregar email</a>
            </div>
            <div class="col-md-6 text-center">
                <h5>Estados de Contacto</h5>
                <table class="table table-striped table-hover text-center tiny">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>status</th>
                                <th>Acci&oacute;n</th>                                    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($status as $s)
                            <tr>
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->status }}</td>
                                <td>
                                    <a href="{{ route('contacts.edit', $s->id) }}" class="btn btn-sm btn-default"><img width="25px" src="{{asset('admin/image/pencil.svg')}}" alt="" srcset=""></a>       
                                    {!! Form::open(['route'=>['c_status.destroy', $s->id], 'method'=>'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}                       
                                </td>
                            </tr>                       
                            @endforeach
                        </tbody>
                    </table>
                    <a class="float-left btn btn-primary" href="#" data-toggle="modal" data-target="#s_create">Agregar estado</a>
            </div>
        </div>
        <hr>
        <h3 class="text-center my-3">Mensajes Recibidos</h3>
        <div class="container">
                <table class="table table-striped table-hover text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>IP</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th colspan="3">Acci&oacute;n</th>                                    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contact as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->ip }}</td>
                                <td>{{ $c->name, $c->lastname}}</td>
                                <td>{{ $c->phone }}</td>
                                <td>{{ $c->email }}</td>
                                <td>{{ $c->c_status }}</td>
                                <td>
                                    <a href="{{ route('contacts.show', $c->id) }}" class="btn btn-sm btn-success">Ver</a>                                                               
                                </td>
                            </tr>
                       
                            @endforeach
                        </tbody>
                </table>
        </div>
</div>       

<div class="modal fade" id="e_create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Agregar Correo de contacto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['route' => 'emails.store']) !!}

                @include('admin.contact.partials.formEmail')
    
            {!! Form::close() !!}
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="s_create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Agregar estatus de correo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['route' => 'c_status.store']) !!}

                @include('admin.contact.partials.formStatus')
    
            {!! Form::close() !!}
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
</div>

@endsection