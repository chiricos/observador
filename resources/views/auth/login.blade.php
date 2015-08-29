@extends('plantille')

@section('title')

    Iniciar Session

@stop

@section('content')



    <div class="login">
    <div class="panel-heading"><p>Login</p></div>

            @if (count($errors) > 0)
            <div class="alert-login">
                @foreach ($errors->all() as $error)
                   Los datos estan mal
                @endforeach
            </div>
            @endif



        <form class="form-login" role="form" method="POST" action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group-login">
                <label class=" control-label-login">Correo</label>
                <div class="col-md-6-login">
                    <input type="email" class="form-control-login" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group-login">
                <label class=" control-label-login">Contraseña</label>
                <div class="col-md-6-login">
                    <input type="password" class="form-control-login" name="password">
                </div>
            </div>

            <div class="form-group-login">
                <div class=" col-md-offset-4-login">
                    <div class="checkbox">
                        <label class=" control-label-login">
                            <input type="checkbox" name="remember"> Recordar
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group-login">
                <div class="col-md-offset-4-login">
                    <button type="submit" class=" btn-primary-login">Iniciar Session</button>

                    <a class="control-label-login btn-link-login" href="{{ url('/password/email') }}">Olvidaste tú contraseña?</a>
                </div>
            </div>
        </form>
    </div>


@stop
