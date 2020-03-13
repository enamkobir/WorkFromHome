<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;

class allpostController extends Controller
{
    public function allpostForAdmin(){

      $data=DB::table('posts')->get();
      return view('allpostForAdmin', compact('data'));
    }

    public function allpostForWorker(){

      $data=DB::table('posts')->get();
      return view('allpostForWorker', compact('data'));
    }

    public function allpostForClient(){

      $user_id = Auth::id();
      $user = User::find($user_id);
      $post = DB::table('posts')->where('user_id',$user_id)->get();

      return view('allpostForClient',[
        'data' => $post
      ]);
    }
}
