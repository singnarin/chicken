<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\OrderBaby;
use App\Food;

class OrderController extends Controller
{
    public function orderBaby(){
      $orderBaby = OrderBaby::all();
      return View('order.orderBaby')
        ->with('orderBaby', $orderBaby);
    }

    public function orderBabyForm(Request $request, $id = null){
      if(empty($id)){
        $orderBaby = new OrderBaby;
      }else{
        $orderBaby = find::all($id);
      }

      if($request->all()){
        $orderBaby->farm_id = $request->get('farm_id');
        $orderBaby->amount = $request->get('amount');
        $orderBaby->approved = 'wait';
        if($orderBaby->save()){
          return Redirect('orderBaby');
        }
      }
      return View('order.orderBabyForm')
        ->with('orderBaby', $orderBaby);
    }

    public function orderFood(){
      $orderFood = Food::all();
      return View('order.orderFood')
        ->with('orderFood', $orderFood);
    }

    public function orderFoodForm(Request $request, $id = null){
      if(empty($id)){
        $orderFood = new Food;
      }else{
        $orderFood = find::all($id);
      }

      if($request->all()){
        $orderFood->name = $request->get('name');
        $orderFood->amount = $request->get('amount');
        $orderFood->approved = 'wait';
        if($orderFood->save()){
          return Redirect('orderFood');
        }
      }
      return View('order.orderFoodForm')
        ->with('orderFood', $orderFood);
    }
}
