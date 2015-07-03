<div class="">
    {!! Form::label('identification','Cedula') !!}
    {!! Form::text('identification',null,['class'=>'form-control','placeholder'=>'ingrese su cedula']) !!}
</div>

<div class="">
    {!! Form::label('user_name','Username') !!}
    {!! Form::text('user_name',null,['class'=>'form-control','placeholder'=>'ingrese su username']) !!}
</div>

<div class="">
    {!! Form::label('name','Primer Nombre') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'ingrese su primer nombre']) !!}
</div>

<div class="">
    {!! Form::label('second_name','Segundo Nombre') !!}
    {!! Form::text('first_name',null,['class'=>'form-control','placeholder'=>'ingrese su segundo nombre']) !!}
</div>

<div class="">
    {!! Form::label('last_name','Apellido') !!}
    {!! Form::text('last_name',null,['class'=>'form-control','placeholder'=>'ingrese su apellido']) !!}
</div>

<div class="">
    {!! Form::label('second_last_name','Segundo Apellido') !!}
    {!! Form::text('second_last_name',null,['class'=>'form-control','placeholder'=>'ingrese su segundo apellido']) !!}
</div>

<div class="">
    {!! Form::label('email','Correo') !!}
    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'ingrese su correo']) !!}
</div>

<div class="">
    {!! Form::label('password','Contraseña') !!}
    {!! Form::password('password',['class'=>'form-control','placeholder'=>'contraseña']) !!}
</div>

<div class="">
    {!! Form::label('confirmation_password','Confirmar Contraseña') !!}
    {!! Form::password('confirmation_password',['class'=>'form-control','placeholder'=>'contraseña']) !!}
</div>

<div class="">
    {!! Form::label('mobile_phone','Celular') !!}
    {!! Form::text('mobile_phone',null,['class'=>'form-control','placeholder'=>'ingrese su celular']) !!}
</div>

<div class="">
    {!! Form::label('phone','Telefono') !!}
    {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'ingrese su telefono']) !!}
</div>

<div class="">
    {!! Form::label('email','Correo') !!}
    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'ingrese su correo']) !!}
</div>

<div class="">
    {!! Form::label('role_id','Tipo de Cuenta') !!}
    {!! Form::select('role_id',$types,null,['class'=>'form-control']) !!}
</div>

<div class="">
    {!! Form::label('photo','Foto') !!}
    {!! Form::file('photo') !!}
</div>