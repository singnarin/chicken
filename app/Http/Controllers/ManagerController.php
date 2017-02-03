<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\OrderBaby;
use App\Chicken;
use App\Food;

class ManagerController extends Controller
{
    public function babyList(){
      $babyList = OrderBaby::where('approved', '=', 'wait')->get();
      return View('manager.babyList')
        ->with('babyList', $babyList);
    }

    public function babyApprove(Request $request, $id = null){
      $data = OrderBaby::find($id);
      if(!empty($data)){
        $data->approved = 'yes';
        if($data->save()){
          for($i=0;$i<$data->amount;$i++){
            $chicken = new Chicken;
            $chicken->farm_id = $data->farm_id;
            $chicken->code = $chicken->farm_id.substr(uniqid(),10,13);
            $chicken->weight = 70;
            $chicken->status = 'baby';
            $chicken->save();
          }
          return Redirect('babyList');
        }
      }
    }

    public function babyNoApprove(Request $request, $id = null){
      $data = OrderBaby::find($id);
      if(!empty($data)){
        $data->approved = 'no';
        if($data->save()){
          return Redirect('babyList');
        }
    }
  }

  public function foodList(){
    $foodList = Food::where('approved', '=', 'wait')->get();
    return View('manager.foodList')
      ->with('foodList', $foodList);
  }

  public function foodApprove(Request $request, $id = null){
    $data = Food::find($id);
    if(!empty($data)){
      $data->approved = 'yes';
      if($data->save()){
        return Redirect('foodList');
      }
    }
  }

  public function foodNoApprove(Request $request, $id = null){
    $data = Food::find($id);
    if(!empty($data)){
      $data->approved = 'no';
      if($data->save()){
        return Redirect('foodList');
      }
  }
}

}
