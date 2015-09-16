@extends('plantille')

@section('title')
    observador
@stop

@section('content')

    <div class="container ">
        <div class="panel-heading"><p>Crear Usuario </p></div>
        <div class="container-fluid right-text">
        </div>

        <div class="container-fluid">
            @include('Complements.Users.message')
            <a class="btn btn-default" href="{{route('createUser')}}">Crear un nuevo usuario</a>

            @include('Complements.Users.table')
        </div>
    </div>

@stop