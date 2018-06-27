<div class="form-group">
        {{ Form::label('name', 'Nombre')}}
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
        {{ Form::label('url', 'Url')}}
        {{ Form::text('url', null, ['class' => 'form-control', 'id' => 'url']) }} 
</div>

<div class="form-group text-center">
    {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) }}
</div>
