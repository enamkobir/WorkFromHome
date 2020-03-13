<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class postController extends Controller
{
  public function post(){
    return view('post');
  }

  public function StorePost(Request $request){

    $data = [
      'name' => $request->name,
      'email' => $request->email,
      'details' => $request->details,
      'file' => $request->file,
      'user_id' => Auth::Id()
    ];

    $posts=DB::table('posts')->insert($data);
  }

  public function ViewPost($id){
    $posts=DB::table('posts')->where('id',$id)->first();
    return view('singlePost')->with('single',$posts);
  }


}
