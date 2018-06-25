<div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
              
            {!! Form::label('email', 'Email') !!}        
            {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
      
            {!! Form::label('status', 'Status') !!}   
            {{ Form::select('status', array(
                'ACTIVE' => 'Active',
                'INACTIVE' => 'Inactive',
            ), null,['class' => 'form-control', 'id' => 'status']) }}
        
    </div>
    
    <div class="form-group text-center">
        {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) }}
    </div>
    