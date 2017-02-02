<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
    public function orderBaby(){
      $orderBaby = OrderBaby::all();
      return View('order.orderBaby')
        ->with('orderBaby', $orderBaby);
    }
}
