@extends('plantille')

@section('title')

    Iniciar Session

@stop

@section('content')

    <div class="container">
        <div class="panel-heading"><p>Datos Personales</p></div>
        <div class="container-fluid">
            <div class="two-container">
                @if(Auth::user()->photo=="")
                    <img src="images/perfil.png" alt="foto de perfil" class="img-thumbnail">
                @else
                    <img src="images/{{Auth::user()->photo}}" alt="foto de perfil" class="img-thumbnail">
                @endif
                <a class="btn btn-default" href="{{route('editUser',Auth::user()->id)}}" role="button">Editar</a>
            </div>
            <div class="two-container two-text">
                <p class="lead">Nombre: {{Auth::user()->fullName}}</p>
                <p class="lead">Correo: {{Auth::user()->email}}</p>
                <p class="lead">Celular: {{Auth::user()->mobile_phone}}</p>
                <p class="lead">Teléfono: {{Auth::user()->phone}}</p>
                @if(Auth::user()->role_id=="estudiante")
                    <p class="lead">Curso: {{Auth::user()->curso}}</p>
                @endif
                <p class="lead">Tipo de cuenta: {{Auth::user()->role_id}}</p>
            </div>
        </div>

    </div>

@stop
