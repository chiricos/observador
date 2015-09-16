<?php namespace baibai\Http\Controllers;

use baibai\Http\Requests\EditUserRequest;
use baibai\baibai\Entities\Observador;
use baibai\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use baibai\Http\Requests\CreateUserRequest;

class ObservationController extends Controller {


   public function show(){
       $users=User::where('role_id','=','estudiante')->get();
       return view('CRUD.observation',compact('users'));
   }

    public  function observations($id){
        $user=User::find($id);
        $observations=Observador::where('user_id','=',$id)->get();
        return view('CRUD.Users.observations',compact('observations','user'));

    }

    public function createObservation($id)
    {
        Observador::create(Input::all());
        return Redirect::back();
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
