<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Dine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function self(){
        return redirect('/profile/'.Auth::user()->user_id);
    }

    public function getProfile($id){
        if($id == Auth::user()->user_id) { // self
            $customerList = Customer::where('customerUid','=',Auth::user()->user_id)->get();

            $dines = Dine::where('uid','=',Auth::user()->user_id)->orderBy('dineDate','=','desc')->get();
            $totalRating = User::where('auth0id','=',Auth::user()->user_id)->first()->getTotalRating();
            $user = User::where('auth0id','=',Auth::user()->user_id)->first();
            $rating = $user->getRating();
            return view('profile',compact('customerList','dines','totalRating','user','rating'));

        } else { // guess
            $customerList = Customer::where('customerUid','=',$id)->get();

            $dines = Dine::where('uid','=',$id)->orderBy('dineDate','=','desc')->get();
            $totalRating = User::where('auth0id','=',$id)->first()->getTotalRating();
            $user = User::where('auth0id','=',$id)->first();
            $rating = $user->getRating();
            return view('profile',compact('customerList','dines','totalRating','user','rating'));
        }
    }
}
