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
      'duration' => $request->duration,
      'file' => $request->file,
      'user_id' => Auth::Id()
    ];

    $posts=DB::table('posts')->insert($data);
    if($posts){
      return Redirect()->back();
    }
  }

  public function ViewPost($id){
    $posts=DB::table('posts')->where('id',$id)->first();
    return view('singlePost')->with('single',$posts);
  }

  public function EditPost($id){
    $edit=DB::table('posts')->where('id',$id)->first();
    return view('editPost', compact('edit'));
  }

  public function UpdatePost(Request $request,$id){
    $data = [
      'name' => $request->name,
      'email' => $request->email,
      'details' => $request->details,
      'duration' => $request->duration,
      'file' => $request->file,
      'user_id' => Auth::Id()
    ];

    $edit=DB::table('posts')->where('id',$id)->update($data);
    if($edit){
      return Redirect()->back();
    }
  }

  public function DeletePost($id){
    $delete=DB::table('posts')->where('id',$id)->delete();
    return Redirect()->back();
  }
}
