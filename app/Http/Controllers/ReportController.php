<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Chicken;
use DB;
use App\Farm;

class ReportController extends Controller
{
    public function totalBaby(){
      $data = Chicken::Select(DB::raw('*, COUNT(*) as totalBaby'))
        ->where('status', '=', 'baby')
        ->groupBy('farm_id')->get();
      return View('report.totalBaby')
        ->with('data', $data);
    }

    public function totalBig(){
      $data = Chicken::Select(DB::raw('*, COUNT(*) as totalBig'))
        ->where('status', '=', 'big')
        ->groupBy('farm_id')->get();
      return View('report.totalBig')
        ->with('data', $data);
    }

    public function totalForKill(){
      $data = Chicken::Select(DB::raw('*, COUNT(*) as totalForKill'))
        ->where('status', '=', 'for_kill')
        ->groupBy('farm_id')->get();
      return View('report.totalForKill')
        ->with('data', $data);
    }

    public function totalKill(){
      $data = Chicken::Select(DB::raw('*, COUNT(*) as totalKill'))
        ->where('status', '=', 'killed')
        ->groupBy('farm_id')->get();
      return View('report.totalKill')
        ->with('data', $data);
    }

    public function totalSale(){
      $price = config('chicken_settings.chicken_price');
      $data = Chicken::Select(DB::raw('*, COUNT(*) as totalKill'))
        ->where('status', '=', 'killed')
        ->groupBy('farm_id')->get();
      return View('report.totalSale')
        ->with('price', $price)
        ->with('data', $data);
    }
}
