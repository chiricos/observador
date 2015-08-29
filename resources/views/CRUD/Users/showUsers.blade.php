@extends('plantille')

@section('title')
    observador
@stop

@section('content')

    <div class="container ">
        <div class="panel-heading"><p>Crear Usuario </p></div>
        <div class="container-fluid right-text">
            @include('Complements.Users.search')
        </div>

        <div class="container-fluid">
            @include('Complements.Users.message')
            <a class="btn btn-default" href="{{route('createUser')}}">Crear un nuevo usuario</a>

            @include('Complements.Users.table')
            {!!$users->appends(Request::only(['name','type']))->render()!!}
        </div>
    </div>

@stop