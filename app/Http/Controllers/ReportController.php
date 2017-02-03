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
}
