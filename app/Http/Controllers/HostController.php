<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Dine;
use App\Http\Requests\CreateDineRequest;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class HostController extends Controller
{
    public function becomeHost(CreateDineRequest $request){
        //dd(Auth::user());
        if(Input::hasFile('file')){


            $file = Input::file('file');

            $destinationPath = public_path(). '/uploads/';
            $filename = $file->getClientOriginalName();
            $filename = md5(Carbon::now()).'-'.Auth::user()->given_name.'-'.$filename;
            $file->move($destinationPath, $filename);
        }
        $dine = new Dine();
        $dine->uid = Auth::user()->user_id;
        $dine->name= $request->mealTitle;
        $dine->detail = $request->mealDescription;
        $dine->price=$request->price;

        if(Input::hasFile('file')) {
            $dine->pic = '/uploads/'.$filename;
        } else {
            $dine->pic = '/uploads/'.'food_small_empty.jpg';
        }
        $dine->dineDate=$request->date;

        if($request->time == 1) {
            $request->timeStart = '8:00';
            $request->timeEnd = '10:00';
        } elseif($request->time == 2) {
            $request->timeStart = '12:00';
            $request->timeEnd = '14:00';
        } elseif($request->time == 3) {
            $request->timeStart = '18:00';
            $request->timeEnd = '20:00';
        } elseif($request->time == 4) {
            $request->timeStart = '20:00';
            $request->timeEnd = '22:00';
        }
        $dine->timeStart=$request->timeStart;
        $dine->timeEnd=$request->timeEnd;
        $dine->seatMax=$request->seatMax;
        $dine->seatAvailable=$request->seatMax;
       // $dine->location_lat = $request->location_lat;
       // $dine->lacation_lon = $request->location_lon;
        $dine->address = $request->address;
        $dine->save();
        $tags = explode(',',$request->createTags);
        foreach ($tags as $tagMe) {
          $tag = new Tag();

          $tag->did = $dine->id;
          $tag->tag= $tagMe;
          $tag->save();
        }
          Session::flash('success','Congratulation! your meal hosting has been created!');
          return back();
      }
}
