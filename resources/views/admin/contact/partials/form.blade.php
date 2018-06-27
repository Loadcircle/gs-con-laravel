<div class="form-group row">
    <div class="col-sm-6">
        <p>Mensaje desde la seccion de <strong>Contacto</strong> desde la IP: <strong>{{$contact->ip}}</strong></p><hr>
        <p>Fue enviado por: <strong>{{$contact->name}} {{$contact->lastname}}</strong></p><hr>
        <p>Telefono: <strong>{{$contact->phone}}</strong></p><hr>
        <p>Email: <strong>{{$contact->email}}</strong> </p><hr>
        <p>Mensaje: <strong>{{$contact->message}}</strong></p><hr>
    </div>
    <div class="col-sm-6">
        {!! Form::label('status', 'Actualizar estatus') !!}   
        {{ Form::select('status', $array, null,['class' => 'form-control', 'id' => 'status']) }}
        <br><hr>
        <p>Recibido el dia: <strong>{{$contact->created_at}}</strong></p><hr>
        <p>Ultima actualización: <strong>{{$contact->updated_at}}</strong></p><hr>
    </div>
</div>

<div class="form-group text-center">
    {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) }}
</div>
