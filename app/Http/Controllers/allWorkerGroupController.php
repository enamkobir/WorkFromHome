<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;

class allWorkerGroupController extends Controller
{

    public function groupWorker(){
      $uid = Auth::user()->id;

      $data = DB::table('groups')
             ->leftJoin('users','users.id','groups.user_requested')
             ->where('status', 1)
             ->where('requester', $uid)
             ->get();
      return view('groupWorker', compact('data'));
    }

}
