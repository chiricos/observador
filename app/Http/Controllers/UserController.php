<?php namespace baibai\Http\Controllers;

use baibai\User;
use Illuminate\Support\Facades\Redirect;
use baibai\Http\Requests\CreateUserRequest;

class UserController extends Controller {



    public function showUsers()
    {
        $users=User::paginate(15);
        return view('CRUD.Users.showUsers',compact('users'));
    }

    public function createUser()
    {
        $types=[
            ''          =>'seleccione Cuenta',
            '1'         =>'Super Administrador',
            '2'         =>'Administrador','3'=>'Tecnico',
            '4'         =>'Cliente'
        ];
        return view('CRUD.Users.createUser',compact('types'));
    }

    public function saveUser(CreateUserRequest $request)
    {
        dd('drawde');
    }

    public function deleteUser($id){
        $user=User::find($id);
        if($user->delete())
        {
            $message='el usuario '.$user->full_name.'  fue eliminado exitosamente';
            return Redirect::back()->with('message',$message);
        }
        $message='el usuario '.$user->full_name.' no pudo ser eliminado';
        return Redirect::back()->with('message_error',$message);
    }

}
