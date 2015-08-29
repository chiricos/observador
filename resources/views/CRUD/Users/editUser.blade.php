@extends('plantille')

@section('title')

    baibai creacion de cuentas

@stop

@section('content')

    <div class="container ">
        <div class="panel-heading"><p>Editar Usuario </p></div>
        <div class="container-fluid">
            @include('Complements.Users.errors')
            @include('Complements.Users.message')
            {!! Form::model($user,['route'=>['updateUser',$user],'method'=>'POST']) !!}
            @include('Complements.Users.fields')
            {!! Form::submit('Actualizar Usuario',['class'=>'btn-primary-login']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop