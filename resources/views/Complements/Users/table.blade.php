<table class="table table-bordered">

    <tr>
        <td>foto</td>
        <td>Cedula</td>
        <td>Nombre Completo</td>
        <td>Correo Electronico</td>
        <td>Celular</td>
        <td>Telefono</td>
        <td>Tipo de Cuenta</td>
        <td>Acciones</td>
    </tr>
    @foreach($users as $user)
        <tr >
            <td>{{$user->photo}}</td>
            <td>{{$user->identification}}</td>
            <td>{{$user->full_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->mobile_phone}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->type}}</td>
            <td>
                <a href="{{route('editUser',$user)}}">Editar</a>
                <a href="{{route('deleteUser',$user)}}" class="btn-delete">Eliminar</a>
            </td>

        </tr>

    @endforeach

</table>