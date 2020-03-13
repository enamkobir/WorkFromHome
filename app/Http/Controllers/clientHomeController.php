<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientHomeController extends Controller
{
  public function clientHome(){
    return view('clientHome');
  }
}
