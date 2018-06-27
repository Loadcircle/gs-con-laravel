@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <h1 class="text-center">Configuracion Footer</h1>
        <hr>
        
        <div class="">
            <div class="row">
                <div class="col-md-5">
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Url</th>
                                    <th>Acci&oacute;n</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($keep as $k)
                                <tr>
                                    <td>{{ $k->id }}</td>
                                    <td>{{ $k->name }}</td>
                                    <td>{{ $k->url }}</td>
                                    <td>
                                        {!! Form::open(['route'=>['keeps.destroy', $k->id], 'method'=>'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a class="float-right btn btn-primary" href="#" data-toggle="modal" data-target="#create">Agregar</a>
                </div>
                <div class="col-md-7">
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Acci&oacute;n</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($footer as $f)
                                <tr>
                                    <td>{{ $f->id }}</td>
                                    <td>{{ $f->name }}</td>
                                    <td>{{ $f->status }}</td>
                                    <td>
                                    @if ($f->status == 'ACTIVE')                                            
                                        {!! Form::open(['route'=>['footers.destroy', $f->id], 'method'=>'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Desactivar
                                        </button>
                                        {!! Form::close() !!}
                                    @else
                                        {!! Form::open(['route'=>['footers.show', $f->id], 'method'=>'GET']) !!}
                                            <button class="btn btn-sm btn-success">
                                                Activar
                                            </button>
                                        {!! Form::close() !!}
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
</div>       
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Agregar a la lista</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['route' => 'keeps.store']) !!}

                @include('admin.footer.partials.formKeep')
    
            {!! Form::close() !!}
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
</div>

@endsection