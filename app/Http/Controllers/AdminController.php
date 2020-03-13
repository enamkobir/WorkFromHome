<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class AdminController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function getIndex(){
    $user_id = Auth::Id();
    $user = User::find($user_id);
    if($user->role==1){
      return view('admin.dashboard');
    }else{
      return "Tui Admin Naaaaaaa";
    }
  }
}
