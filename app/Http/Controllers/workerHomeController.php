<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workerHomeController extends Controller
{
  public function workerHome(){
    return view('workerHome');
  }
}
