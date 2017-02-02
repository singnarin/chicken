<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function index(){
      $user = User::all();
      return View('user.index')
       ->with('user', $user);
    }

    public function form(Request $request, $id = null){
      if(empty($id)){
        $user = new User;
      }else{
        $user = User::find($id);
      }

      if($request->all()){
        $user->user_type_id = $request->get('user_type_id');
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->password = $request->get('password');
        if($user->save()){
          return Redirect('user');
        }
      }
      return View('user.form')
        ->with('user', $user);
    }

    public function delete($id=null){
      if(!empty($id)){
        User::destroy($id);
        return Redirect('user');
      }
    }
}
