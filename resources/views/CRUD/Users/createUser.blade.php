@extends('plantille')

@section('title')

    baibai creacion de cuentas

@stop

@section('content')

    @include('Complements.Users.message')
    {!! Form::open(['route'=>'createUser','method'=>'POST']) !!}
    @include('Complements.Users.fields')
    {!! Form::submit('Crear Usuario') !!}
    {!! Form::close() !!}

@stop