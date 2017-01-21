<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Dine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DineController extends Controller
{
    public function showDineItem($id){
        $dine = Dine::where('id','=',$id)->first();
        if(empty($dine)) {
            return abort(404);
        }
        $customer = Customer::where('did','=',$id)->where('CustomerUid','=',Auth::user()->auth0id)->first();
        $isDoReservation = !empty($customer)?true:false;
        return view('showDineItem',compact('dine','isDoReservation'));
    }

    public function reservationConfrim($id,$request){
        $dine = Dine::where('id','=',$request->did)->first();
        if(empty($dine)) {
            return abort(404);
        }

        if($dine->seatAvailable >= 1) {
            $customer = new Customer();
            $customer->customerUid = Auth::user()->auth0id;
            $customer->did = $request->did;
            $customer->arrivalTime = $request->arrivalTime;
            $customer->save();
            $dine->seatAvailable = $dine->seatAvailable-1;
            Session::flash('success','Congratulation! your resevation has been made!');
            return back();
        } else {
            Session::flash('error','Sorry. Your selected dine is full.');
            return back();
        }

    }
}
