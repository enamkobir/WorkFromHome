<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;

class allClientAccountController extends Controller
{
    public function allClientAccount(){
        $data=DB::table('users')->where('role',2)->get();
        return view('allClientAccount', compact('data'));
    }
}
