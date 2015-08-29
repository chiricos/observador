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


        @if(Auth::user()->role_id=="coordinador")
            <tr >
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
                    <a href="{{route('editUser',$user)}}">Editar</a>
                    <a href="{{route('deleteUser',$user)}}" class="btn-delete">Eliminar</a>
                </td>

            </tr>
        @else
            @if(Auth::user()->role_id=="profesor")
                @if(Auth::user()->id==$user->user_id)
                    <tr >
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
                            <a href="{{route('editUser',$user)}}">Editar</a>
                            <a href="{{route('deleteUser',$user)}}" class="btn-delete">Eliminar</a>
                        </td>

                    </tr>
                @endif
            @endif
        @endif
    @endforeach

</table>