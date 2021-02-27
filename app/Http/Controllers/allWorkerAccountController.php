<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;

class allWorkerAccountController extends Controller
{
    public function allWorkerAccount(){
        $data=DB::table('users')->where('role',3)->get();
        return view('allWorkerAccount', compact('data'));
    }

    public function allWorkerAccountForWorker(){

          $uid = Auth::user()->id;
          $data = DB::table('users')->where([['id','!=', $uid],['role',3]])->get();
          return view('allWorkerAccountForWorker', compact('data'));
    }
}
