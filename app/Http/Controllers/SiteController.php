<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    public function index(){
      $user = Session::get('user');
      if(!empty($user)){
        return View('site.index');
      }
    }

    public   function loginForm(){
      return View:('site.loginForm');
    }
}
