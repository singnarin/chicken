<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Farm;

class FarmController extends Controller
{
    public function index(){
      $farm = Farm::all();
      return View('farm.index')
        ->with('farm', $farm);
    }

    public function form(Request $request, $id = null){
      if(empty($id)){
        $farm = new Farm;
      }else{
        $farm = Farm::find($id);
      }

      if($request->all()){
        $farm->name = $request->get('name');
        if($farm->save()){
          return Redirect('farm');
        }
      }
      return View('farm.form')
        ->with('farm', $farm);
    }

    public function delete($id=null){
      if(!empty($id)){
        Farm::destroy($id);
        return Redirect('farm');
      }
    }
}
