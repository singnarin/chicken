<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Chicken;
use App\Farm;
use App\FeedFood;
use App\Food;

class ChickenController extends Controller
{
    public function feedList(Request $request, $id = null){
      $for_kill = config('chicken_settings.weight_for_kill');
      if($request->has('farm_id')){
        $farm_id = $request->get('farm_id');
        $chicken = Chicken::where('farm_id', '=', $farm_id)
          ->whereIn('status', array('baby', 'big'))
          ->where('weight', '<=', $for_kill)
          ->paginate(5);
      }else{
        $farm_id = null;
        $chicken = Chicken::whereIn('status', array('baby', 'big'))
        ->where('weight', '<=', $for_kill)
        ->paginate(5);
      }
      return View('chicken.feedList')
        ->with('chicken', $chicken)
        ->with('farm_id', $farm_id);
    }

    public function feedForm(Request $request, $id = null){
      $feed = new FeedFood;
      if($request->all()){
        $feed->chicken_id = $id;
        $feed->food_id = $request->get('food_id');
        $feed->feed = $request->get('feed');
        $feed->create = $request->get('create');
        if($feed->save()){
          $food = Food::find($request->get('food_id'));
          $food->amount = ($food->amount - $request->get('feed'));
          $food->save();
          return Redirect('feedList');
        }
      }
      return View('chicken.feedForm');
    }

    public function growthList(Request $request, $id = null){
      $for_kill = config('chicken_settings.weight_for_kill');
      if($request->has('farm_id')){
        $farm_id = $request->get('farm_id');
        $chicken = Chicken::where('farm_id', '=', $farm_id)
          ->whereIn('status', array('baby', 'big', 'for_kill'))
          //->where('weight', '<=', $for_kill)
          ->paginate(10);
      }else{
        $farm_id = null;
        $chicken = Chicken::whereIn('status', array('baby', 'big', 'for_kill'))
        //->where('weight', '<=', $for_kill)
        ->paginate(10);
      }
      return View('chicken.growthList')
        ->with('chicken', $chicken)
        ->with('farm_id', $farm_id);
    }

    public function growthForm(Request $request, $id = null){
      $chicken = Chicken::find($id);
      if($request->all()){
        $weight = $request->get('weight');
        $big = config('chicken_settings.weight_for_big');
        $for_kill = config('chicken_settings.weight_for_kill');
        if($weight >= $for_kill){
          $chicken->status = 'for_kill';
        }else if($weight >= $big){
          $chicken->status = 'big';
        }
        $chicken->weight = $weight;
        if($chicken->save()){
          return Redirect('growthList');
        }
      }
      return View('chicken.growthForm')
        ->with('chicken', $chicken);
    }

    public function killList(Request $request){
      if($request->has('farm_id')){
        $farm_id = $request->get('farm_id');
        $chicken = Chicken::where('farm_id', '=', $farm_id)
          ->where('status', '=', 'for_kill')
          ->paginate(10);
      }else{
        $farm_id = null;
        $chicken = Chicken::where('status', '=', 'for_kill')->paginate(10);
      }
      return View('chicken.killList')
        ->with('chicken', $chicken)
        ->with('farm_id', $farm_id);
    }

    public function kill(Request $request, $id = null){
      if(!empty($id)){
        $chicken = Chicken::find($id);
        $chicken->status = 'killed';
        if($chicken->save()){
          return Redirect('killList');
        }
      }
    }


}
