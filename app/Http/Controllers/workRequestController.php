<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use Session;

class workRequestController extends Controller
{
  public function sendWorkRequest($id){
      $data = [
        'requester' => Auth::Id(),
        'user_requested' => $id,
        'status' => 2
      ];
      $send=DB::table('work_request')->insert($data);
      if($send){
      //  Session::flash('msg','You already sent request');
        return back();
       }
      }
  public function workRequest(){
           $uid = DB::table('users');
           $data = DB::table('work_request')
           ->leftJoin('posts','posts.id','=','work_request.user_requested')
           ->where('status',2)
           ->where('work_request.requester','=',$uid)->get();
           return view('workRequest', compact('data'));
      }
}
