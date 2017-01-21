<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Dine;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HostController extends Controller
{
    public function becomeHost($request){
          $dine = new Dine();
          $dine->uid = Auth::user()->auth0id;
          $dine->name= $request->name;
          $dine->detail = $request->detail;
          //TODO add picture request
          $dine->price=$request->price;
          $dine->dineDate=$request->dineDate;
          $dine->timeStart=$request->timeStart;
          $dine->timeEnd=$request->timeEnd;
          $dine->seatMax=$request->seatMax;
          $dine->seatAvailable=$request->seatMax;
          $dine->save();

    foreach ($request->tags as $tagMe) {
      $tag = new Tag();

      $tag->did = $dine->id;
      $tag->tag= $tagMe;
      $tag->save();
    }
          Session::flash('success','Congratulation! your meal hosting has been created!');
          return back();
      }
}
