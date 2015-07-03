<?php namespace baibai\Http\Controllers;

use baibai\User;

class UserController extends Controller {

   public function showUsers()
   {
       $users=User::paginate(15);
       return view('CRUD.Users.showUsers',compact('users'));
   }

}
