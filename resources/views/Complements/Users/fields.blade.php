<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::text('identification',null,['class'=>'form-control','placeholder'=>'ingrese su cedula']) !!}
    </div>
</div>

<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::text('user_name',null,['class'=>'form-control','placeholder'=>'ingrese su username']) !!}
    </div>
</div>
<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'ingrese su primer nombre']) !!}
    </div>
</div>
<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::text('second_name',null,['class'=>'form-control','placeholder'=>'ingrese su segundo nombre']) !!}
    </div>
</div>
<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::text('last_name',null,['class'=>'form-control','placeholder'=>'ingrese su apellido']) !!}
    </div>
</div>
<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::text('second_last_name',null,['class'=>'form-control','placeholder'=>'ingrese su segundo apellido']) !!}
    </div>
</div>
<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'ingrese su correo']) !!}
    </div>
</div>
<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::password('password',['class'=>'form-control','placeholder'=>'contraseña']) !!}
    </div>
</div>
<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::text('mobile_phone',null,['class'=>'form-control','placeholder'=>'ingrese su celular']) !!}
    </div>
</div>
<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'ingrese su telefono']) !!}
    </div>
</div>
<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::text('curso',null,['class'=>'form-control','placeholder'=>'ingrese el curso']) !!}
    </div>
</div>
@if(Auth::user()->role_id!="estudiante")
<div class="form-group-login">
    <div class="col-md-6-login">
        {!! Form::select('role_id',$types,null,['class'=>'form-control']) !!}
    </div>
</div>
@endif

<div class="form-group-login">
    <div class="col-md-6-login">Foto
        {!! Form::file('photo',['class'=>'form-control']) !!}
    </div>
</div>














<!--<div class="">
    {!! Form::label('confirmation_password','Confirmar Contraseña') !!}
    {!! Form::password('confirmation_password',['class'=>'form-control','placeholder'=>'contraseña']) !!}
</div>-->







<!--<div class="">
    {!! Form::label('photo','Foto') !!}
    {!! Form::file('photo') !!}
</div>-->