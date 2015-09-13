@extends('plantille')

@section('title')
    observador
@stop

@section('content')

    <div class="container ">
        <div class="panel-heading"><p>Observaciones </p></div>
        <div class="container-fluid right-text">
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="panel-heading"><p>Datos Personales</p></div>
                <div class="container-fluid">
                    <div class="two-container">
                        @if($user->photo=="")

                            <img src="{{url('images/perfil.png')}}" alt="foto de perfil" class="img-thumbnail" >
                        @else
                            <img src="{{url('images/'.$user->photo.'')}}" alt="foto de perfil" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="two-container two-text">
                        <p class="lead">Nombre: {{$user->fullName}}</p>
                        <p class="lead">Correo: {{$user->email}}</p>
                        <p class="lead">Celular: {{$user->mobile_phone}}</p>
                        <p class="lead">Teléfono: {{$user->phone}}</p>
                        @if($user->role_id=="estudiante")
                            <p class="lead">Curso: {{$user->curso}}</p>
                        @endif
                        <p class="lead">Tipo de cuenta: {{$user->role_id}}</p>
                    </div>
                </div>

            </div>
            @include('Complements.Users.message')

                <div class="container">
                    <div class="panel-heading"><p>Agregar una nueva observacion</p></div>
                    <div class="container-fluid">
                        {!! Form::open(['route'=>'createObservations','method'=>'POST']) !!}

                        <div class="form-group-login">
                            <div class="col-md-6-login">
                                {!! Form::text('user_id',$user->id,['class'=>'form-control hidden','placeholder'=>'id']) !!}
                            </div>
                        </div>

                        <div class="form-group-login">
                            <div class="col-md-6-login">
                                {!! Form::textarea('observacion',null,['class'=>'form-control','placeholder'=>'increse la observacion','required']) !!}
                            </div>
                        </div>

                        <div class="form-group-login">
                            <div class="col-md-6-login">
                                se compromete a cumplir?
                                {!! Form::checkbox('compromete',null,['required']) !!}

                            </div>
                        </div>

                        {!! Form::submit('Crear Observacion',['class'=>'btn-primary-login']) !!}
                        {!! Form::close() !!}
                    </div>
                    </div>
                </div>


            @if(count($observations)>0)
            @else
                <p>El estudiante no tiene observaciones</p>
            @endif
        </div>
    </div>

@stop