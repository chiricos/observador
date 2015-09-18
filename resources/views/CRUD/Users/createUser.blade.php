@extends('plantille')

@section('title')

    baibai creacion de cuentas

@stop

@section('content')
    <div class="container ">
        <div class="panel-heading"><p>Crear Usuario </p></div>
        <div class="container-fluid">

            @include('Complements.Users.errors')
            @include('Complements.Users.message')
            {!! Form::open(['route'=>'createUser','method'=>'POST','files'=>true,'enctype'=>'multipar/form-data']) !!}
            @include('Complements.Users.fields')
            {!! Form::submit('Crear Usuario',['class'=>'btn-primary-login']) !!}
            {!! Form::close() !!}
        </div>

    </div>



@stop