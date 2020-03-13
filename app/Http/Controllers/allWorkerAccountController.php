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
}
