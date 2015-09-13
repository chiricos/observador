@extends('plantille')

@section('title')
    observador
@stop

@section('content')

    <div class="container ">
        <div class="panel-heading"><p>Observador </p></div>
        <div class="container-fluid right-text">
        </div>

        <div class="container-fluid">
            @include('Complements.Users.message')

            <table class="table table-striped">

                <tr>
                    <td>foto</td>
                    <td>Identificación</td>
                    <td>Nombre Completo</td>
                    <td>Correo Electronico</td>
                    <td>Celular</td>
                    <td>Telefono</td>
                    <td>Curso</td>
                    <td>Tipo de cuenta</td>
                    <td>Acciones</td>
                </tr>
                @foreach($users as $user)
                    @if($user->role_id=="estudiante")
                        <tr>
                            @if($user->photo=="")
                                <td><img src="images/perfil.png" alt="..." class="img-circle"></td>
                            @else
                                <td><img src="images/{{$user->photo}}" alt="..." class="img-circle"></td>
                            @endif
                            <td>{{$user->identification}}</td>
                            <td>{{$user->full_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->mobile_phone}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->curso}}</td>
                            <td>{{$user->role_id}}</td>
                            <td>
                                <a href="{{route('observations',$user)}}">Ver</a>
                            </td>

                        </tr>
                    @endif
                @endforeach

            </table>
        </div>
    </div>

@stop