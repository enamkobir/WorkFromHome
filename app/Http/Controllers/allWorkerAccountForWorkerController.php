<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;

class allWorkerAccountForWorkerController extends Controller
{
    public function allWorkerAccountForWorker(){

        $data=DB::table('users')->where('role',3)->get();
        return view('allWorkerAccount', compact('data'));

    }
}
