<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getHistory(){
        $user = Auth::user();
        $history = Customer::where('customerUid','=',$user->auth0id)->orderBy('created_date','desc')->get();
        return view('profile',compact('history'));
    }
}
