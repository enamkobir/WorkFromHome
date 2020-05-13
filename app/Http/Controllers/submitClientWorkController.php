<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class submitClientWorkController extends Controller
{
  public function submitClientWork(){
    return view('submitClientWork');
  }

  public function storepost(Request $request){

    $data = [
      'name' => $request->name,
      'client_name' => $request->client_name,
      'work' => $request->work,
      'description' => $request->description,
      'user_id' => Auth::Id()
    ];

    $submit_client_work=DB::table('submit_client_work')->insert($data);
    if($submit_client_work){
      return Redirect()->back();
    }
  }

  public function submitMyWork(){
    $data=DB::table('users')->where('role',2)->get();
    return view('submitMyWork', compact('data'));
  }

  public function submittedWork(){
    $data=DB::table('users')->where('role',3)->get();
    return view('submittedWorkForClient', compact('data'));
  }

}
