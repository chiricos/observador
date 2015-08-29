@if(isset(Auth::user()->name))
<header>
    <nav>
        <ul>
            <li><a href="{{url('home')}}">Perfil</a></li>
            @if(Auth::user()->role_id!="estudiante")
            <li><a href="{{route('users')}}">Usuarios</a></li>
            @endif
            <li><a href="">Obsevador</a></li>
            <li><a href="{{ url('/auth/logout') }}">Cerrar Sessión</a></li>
        </ul>
    </nav>
</header>
@endif