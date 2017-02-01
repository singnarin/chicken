<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\UserType;

class UserTypeController extends Controller
{
    public function index(){
      $userType = UserType::all();
      return View('userType.index')
        ->with('userType', $userType);
    }

    public function form(Request $request, $id=null){
      if(empty($id)){
        $userType = new UserType;
      }else{
        $userType = UserType::find($id);
      }
      if($request->all()){
        $userType->name = $request->get('name');
        if($userType->save()){
          return Redirect('userType');
        }
      }
      return View('userType.form')
        ->with('userType', $userType);
    }

    public function delete($id=null){
      if(!empty($id)){
        UserType::destroy($id);
        return Redirect('userType');
      }
    }

}
