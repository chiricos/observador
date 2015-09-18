<?php namespace baibai\Http\Controllers;

use baibai\Http\Requests\EditUserRequest;
use baibai\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use baibai\Http\Requests\CreateUserRequest;

class UserController extends Controller {


    public function showUsers()
    {
        $users=User::all();
        return view('CRUD.Users.showUsers',compact('users'));
    }

    public function createUser()
    {
        $types=$this->types();
        return view('CRUD.Users.createUser',compact('types'));
    }

    public function saveUser(CreateUserRequest $request)
    {
        $photo='perfil.png';
        if($request->file('photo')){
            $file = $request->file('photo');
            $fileName = $file->getClientOriginalName();
            \Storage::disk('local')->put($fileName,  \File::get($file));
            $photo=$fileName;
        }
        $user=new User();
        $user->identification=$request->identification;
        $user->user_name=$request->user_name;
        $user->name=$request->name;
        $user->second_name=$request->second_name;
        $user->last_name=$request->last_name;
        $user->second_last_name=$request->second_last_name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->mobile_phone=$request->mobile_phone;
        $user->phone=$request->phone;
        $user->photo=$photo;
        $user->curso=$request->curso;
        $user->role_id=$request->role_id;
        $user->save();
        return Redirect::back();
    }

    public function editUser($id)
    {
        $user=User::findOrFail($id);
        $types=$this->types();
        return view('CRUD.Users.editUser',compact('user','types'));
    }

    public function updateUser(EditUserRequest $request,$id)
    {
        $user=User::find($id);
        $photo='';
        if($request->file('photo'))
        {
            $file = $request->file('photo');
            $fileName = $file->getClientOriginalName();
            \Storage::disk('local')->put($fileName,  \File::get($file));
            $photo=$fileName;
        }
        $user->fill($request->all());
        $user->photo=$photo;
        $user->save();
        return Redirect::back();
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

    private function types()
    {
        return $types=[
            ''          =>'seleccione Cuenta',
            'estudiante'            =>'estudiante',
            'profesor'              =>'profesor',
            'coordinador'           =>'coordinador'
        ];
    }

}
