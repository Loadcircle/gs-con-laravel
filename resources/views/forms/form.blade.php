                <div class="form-group row">
                        {{ Form::label('nombre',  'Nombre', ['class' => 'col-sm-2 col-form-label']) }}
                    <div class="col-sm-10">
                        {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
                    </div>
                </div>
                <div class="form-group row">
                        {{ Form::label('apellido',  'Apellido', ['class' => 'col-sm-2 col-form-label']) }}
                    <div class="col-sm-10">
                        {{ Form::text('apellido', null, ['class' => 'form-control', 'id' => 'apellido']) }}
                    </div>
                </div>
                <div class="form-group row">
                        {{ Form::label('telefono',  'Telefono', ['class' => 'col-sm-2 col-form-label']) }}
                    <div class="col-sm-10">
                        {{ Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}
                    </div>
                </div>
                <div class="form-group row">
                        {{ Form::label('email',  'Correo', ['class' => 'col-sm-2 col-form-label']) }}
                    <div class="col-sm-10">
                        {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
                    </div>
                </div>  
                <div class="form-group row">
                        {{ Form::label('mensaje',  'Mensaje', ['class' => 'col-sm-2 col-form-label']) }}
                    <div class="col-sm-10">
                        {{ Form::textarea('mensaje', null, ['class' => 'form-control', 'id' => 'mensaje', 'rows' => '3']) }}
                    </div>
                </div>      
                <div class="form-group row">
                        <span class="col-sm-2"></span>
                        <div class="col-sm-10">
                        {{ Form::submit('Enviar', ['class'=>'btn btn-enviar']) }}
                        </div>
                </div>