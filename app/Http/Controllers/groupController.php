<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
<<<<<<< HEAD
use Session;
=======

>>>>>>> 6ca9a67cf9c224be148ee4049189409195ec4720

class groupController extends Controller
{
    public function sendGroupRequest($id){
        $data = [
          'requester' => Auth::Id(),
          'user_requested' => $id,
          'status' => 2
        ];
<<<<<<< HEAD
        $send=DB::table('groups')->insert($data);
        if($send){
        //  Session::flash('msg','You already sent request');
          return back();
         }
        }

=======

        $send=DB::table('groups')->insert($data);
        if($send){
          return back()->with('msg','You already sent request');
         }
        }
>>>>>>> 6ca9a67cf9c224be148ee4049189409195ec4720
    public function grouprequests(){

         $uid = Auth::user()->id;
         $data = DB::table('groups')
         ->leftJoin('users','users.id','=','groups.requester')
         ->where('status',2)
         ->where('groups.user_requested','=',$uid)->get();
         return view('grouprequests', compact('data'));
    }
    public function confirmGroupRequest($id){
       $uid = Auth::user()->id;
       $data = DB::table('groups')->where('requester',$id)
              ->where('user_requested', $uid)
              ->first();
        if($data){
          $updateGroup = DB::table('groups')
          ->where('user_requested', $uid)
          ->where('requester', $id)
          ->update(['status'=>1]);
          if($updateGroup){
                return back();
          }
          else{
              return back()->with('Somthing error');
          }
<<<<<<< HEAD
       }
=======
        }
>>>>>>> 6ca9a67cf9c224be148ee4049189409195ec4720
    }
    public function removeGroupRequest($id){
      DB::table('groups')
              ->where('user_requested', Auth::user()->id)
              ->where('requester', $id)
<<<<<<< HEAD
              ->where('status', 2)
              ->delete();
      return back();
    }
    public function removeGroupMember($id){
      DB::table('groups')
            //  ->where('user_requested', Auth::user()->id)
            //  ->where('requester', $id)
              ->where('status', 1)
=======
>>>>>>> 6ca9a67cf9c224be148ee4049189409195ec4720
              ->delete();
      return back();
    }
    public function groupMemberForWorker(){
        $uid = Auth::user()->id;
<<<<<<< HEAD
=======

>>>>>>> 6ca9a67cf9c224be148ee4049189409195ec4720
        $data = DB::table('groups')
               ->leftJoin('users','users.id','groups.user_requested')
               ->where('status', 1)
               ->where('requester', $uid)
               ->get();
        return view('groupMemberForWorker', compact('data'));
    }
    public function wonGroupForWorker(){
        $uid = Auth::user()->id;
        $data = DB::table('groups')
             ->leftJoin('users','users.id','groups.requester')
              ->where('status', 1)
              ->where('user_requested', $uid)
              ->get();
<<<<<<< HEAD
=======

>>>>>>> 6ca9a67cf9c224be148ee4049189409195ec4720
        return view('wonGroupForWorker', compact('data'));
    }
}
